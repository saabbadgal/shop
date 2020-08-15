<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product; 
use App\Size;
use App\ImageProduct;
use App\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as ImageC;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $products =  Product::with('sizes')->get(); 
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $sizes = Size::all(); 
        return view('admin.product.create',compact('sizes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->image->extension()); 
        $request->validate([
                'name' => 'required',
                'model' => 'required', 
                'color' => 'required', 
                'price' => 'required',  
                'idealFor' => 'required', 
                'sizes' => 'required',
                'stock' => 'required',
                'image' => 'required',   
                 ],
                 [
                'name.required' => 'Name is required', 
            ]);

        $slug = Str::slug($request->name); 
        if($request->hasFile('image')){
 
       // $imageName = time().'.' . $request->image->extension();
       // $imageNameFinal = $request->image->storeAs('images', $imageName,'public');


      $imageName = Str::random(3).$request->image->getClientOriginalName();
      $img = ImageC::make($request->image->getRealPath());
      $image2 =  $img->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save('images/'.$imageName);
         

        $imageNameFinal = 'images/'.$image2->basename;


              
       $img = new Image;
       $img->name = $imageNameFinal;
       $img->alt = Str::slug($imageNameFinal);
       $img->save();
         
        $product = [
          'primary_image' =>  $imageNameFinal,
          'name' =>  $request->name,
          'model' => $request->model,
          'slug' => $slug, 
          'color' =>  $request->color,
          'price' => $request->price,
          'discountPrice' => $request->discountPrice ? $request->discountPrice : null, 
          'idealFor' => $request->idealFor,
          'stock' => $request->stock,
          'outerMaterial' => $request->outerMaterial,
          'soleMaterial' => $request->soleMaterial,
          'upperPattern' => $request->upperPattern,
          'description' =>  $request->description, 
          ];
        
        $product = Product::create($product);
         // dd($product);
        if($product){
          
         $product->sizes()->attach($request->sizes);
         $product->images()->save($img);

        }

        return redirect()->route('admin.product.show',$product->id);
     }
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   

         
        $product = Product::with('sizes','images')->where('id',$id)->first();
        // dd($product);
        return view('admin.product.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) 
    {   
        $sizes = Size::all(); 
        $product = Product::with('sizes')->where('id',$id)->first();
        return view('admin.product.edit',compact('product','sizes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    
           $request->validate([
                'name' => 'required',
                'model' => 'required', 
                'color' => 'required', 
                'price' => 'required',  
                'idealFor' => 'required', 
                'sizes' => 'required',
                'stock' => 'required',   
                 ],
                 [
                'name.required' => 'Name is required', 
            ]);

          $slug = Str::slug($request->name);
      
        if($request->hasFile('image')){

          $p = Product::find($id);
            if(Storage::disk('public')->exists($p->primary_image)){
            Storage::disk('public')->delete($p->primary_image);
            }
            $oldImage = Image::where('name',$p->primary_image)->first();
            $p->images()->delete($oldImage);
            $p->images()->detach($oldImage);
          



            
          // $imageName = time().'.' . $request->image->extension();
          // $imageNameFinal = $request->image->storeAs('images', $imageName,'public');

              $imageName = Str::random(3).$request->image->getClientOriginalName();
      $img = ImageC::make($request->image->getRealPath());
      $image2 =  $img->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save('images/'.$imageName);
         

        $imageNameFinal = 'images/'.$image2->basename;
              
           $img = new Image;
           $img->name = $imageNameFinal;
           $img->alt = Str::slug($imageNameFinal);
           $img->save();
           $p->images()->attach($img);
         }
         $product = Product::where('id',$id)->first();
         if(!isset($imageNameFinal)){
           $imageNameFinal = $product->primary_image;
         }
        $updateProduct = [
          'primary_image' =>  $imageNameFinal,
          'name' =>  $request->name,
          'model' => $request->model,
          'slug' => $slug, 
          'color' =>  $request->color,
          'price' => $request->price,
          'discountPrice' => $request->discountPrice ? $request->discountPrice : null, 
          'idealFor' => $request->idealFor,
          'stock' => $request->stock,
          'outerMaterial' => $request->outerMaterial,
          'soleMaterial' => $request->soleMaterial,
          'upperPattern' => $request->upperPattern,
          'description' =>  $request->description, 
          ];

          
          $product->update($updateProduct);
          if($product){
              
             $product->sizes()->sync($request->sizes);
           
          }

          return redirect()->route('admin.product.show',$product->id);
    }
  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        foreach($product->images as $img){
        // $this->deleteImage($img->id);
          if(Storage::disk('public')->exists($img->name)){
            Storage::disk('public')->delete($img->name);
      }      
        }
        if(Storage::disk('public')->exists($product->primary_image)){
            Storage::disk('public')->delete($product->primary_image);
      } 
        $product->delete(); 
        $product->sizes()->detach();
        $product->images()->detach();
        $product->images()->delete();

        return redirect()->route('admin.product.index');
    }

    public function uploadForm($id){
         
        $product = Product::find($id);
         
        return view('admin.product.imagesupload',compact('product'));
    }
    
    
    public function uploadImages(Request $request,$id){ 
          // dd($request->images);
       $request->validate([
        
        'images' => 'required'
   
       ]);
        
        if($request->images){
          // dd($request->image);
        foreach($request->images as $image){     
  
         $imageName = Str::random(3).$image->getClientOriginalName();
         $img = ImageC::make($image->getRealPath());
         $image2 =  $img->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
        })->save('images/'.$imageName);
         

         $imageNameFinal = 'images/'.$image2->basename;
         // dd($imageNameFinal->filename);
         
         // $result = $s3->put('images',$img);

         // $imageNameFinal = $image->storeAs('images', $imageName,'public'); 
         $img = new Image;
         $img->name = $imageNameFinal;
         $img->alt = Str::slug($imageNameFinal);
         $img->save(); 
        
        $imgs[] = $img->id;
        }

         $product  = Product::find($id);
         $product->images()->attach($imgs);
          // dd($imgs);
         
         return redirect()->route('admin.product.show',$id);

         }
         
    }


    public function deleteImage($id){
 
      $image = Image::find($id);
      $image->delete();
      ImageProduct::where('image_id',$image->id)->first()->delete();
      if(Storage::disk('public')->exists($image->name)){
          Storage::disk('public')->delete($image->name);
      }
      return redirect()->back();
    }



}
