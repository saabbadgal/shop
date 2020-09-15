<?php

namespace App\Http\Controllers\Admin;

use App\Size;
use App\Image;
use App\Design;
use App\Product; 
use App\ImageProduct;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as ImageC;


class ProductController extends Controller
{ 
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $products =  Product::with('sizes')->get(); 
        return view('admin.product.index',compact('products'));
    }

    public function where($type)
    {  
        $products =  Product::where('type',$type)->with('sizes')->get(); 
        return view('admin.product.index',compact('products'));
    }
 
    public function create()
    {   
        $sizes = Size::all(); 
        return view('admin.product.create',compact('sizes'));
    } 

    public function store(Request $request)
    {    
        $request->validate([
                'name' => 'required',
                'model' => 'required', 
                'color' => 'required', 
                'price' => 'required',  
                'idealFor' => 'required', 
                'sizes' => 'required',
                'stock' => 'required',
                'image' => 'required',
                'description' =>'required'
                 ], [
                'name.required' => 'Name is required', 
            ]); 
 

        $slug = Str::slug($request->name); 
        if($request->hasFile('image')){ 

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

       $totalPrice =  $request->price + $request->design_price ?? null ;

        $product = [
          'primary_image' =>  $imageNameFinal,
          'name' =>  $request->name,
          'model' => $request->model,
          'slug' => $slug, 
          'color' =>  $request->color,
          'price' => $request->price,
          'type' => $request->type ?? "without_design",
          'designPrice' => $request->design_price ?? null,
          'totalPrice' => $totalPrice,
          'idealFor' => $request->idealFor,
          'stock' => $request->stock,
          'outerMaterial' => $request->outerMaterial,
          'soleMaterial' => $request->soleMaterial,
          'upperPattern' => $request->upperPattern,
          'description' =>  $request->description,
          ];
        
        $product = Product::create($product); 
        if($product){
         $product->sizes()->attach($request->sizes);
         $product->images()->save($img);
        } 
        return redirect()->route('admin.product.show',$product->id);
     }
   }

    public function show($id)
    { 
      $product = Product::with('sizes','images')->where('id',$id)->first(); 
      return view('admin.product.show',compact('product'));
    } 

    public function edit($id) 
    {   
        $sizes = Size::all(); 
        $product = Product::with('sizes')->where('id',$id)->first();
        return view('admin.product.edit',compact('product','sizes'));
    }

    
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
            
           $price = $request->price;
           $designPrice =  $request->design_price ?? null ;
           $totalPrice = $price + $designPrice; 
           
        $updateProduct = [
          'primary_image' =>  $imageNameFinal,
          'name' =>  $request->name,
          'model' => $request->model,
          'slug' => $slug, 
          'color' =>  $request->color,
          'price' => $request->price,
          'type' => $request->type ?? "without_design",
          'designPrice' => $request->design_price ?? null,
          'totalPrice' => $totalPrice,
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

    public function destroy($id)
    {
        $product = Product::find($id);
        foreach($product->images as $img){ 
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

    // public function uploadForm($id){
    //     $product = Product::find($id);
    //     return view('admin.product.imagesupload',compact('product'));
    // }
    
    public function uploadImages(Request $request,$id){ 
       $request->validate([
        'images' => 'required'
       ]);
        
        if($request->images){ 
         foreach($request->images as $image){     
  
         $imageName = Str::random(3).$image->getClientOriginalName();
         $img = ImageC::make($image->getRealPath());
         $image2 =  $img->resize(800, null, function ($constraint) {
            $constraint->aspectRatio();
         })->save('images/'.$imageName);

         $imageNameFinal = 'images/'.$image2->basename;
         $img = new Image;
         $img->name = $imageNameFinal;
         $img->alt = Str::slug($imageNameFinal);
         $img->save(); 
         $imgs[] = $img->id;
        }
         $product  = Product::find($id);
         $product->images()->attach($imgs); 

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

    
  //   public function designCreate($id){
      
  //     $product = Product::find($id);
  //     return view('admin.design.create',compact('product'));
  //   }
    
  //   public function designStore(Request $request, $id){ 
        
  //     $request->validate([
  //       'design_name' => 'required',
  //       'design_price' => 'required',
  //       'design_image' => 'required', 
  //     ]);
  //       if($request->hasFile('design_image')){ 
          
  //         $imageName = Str::random(3).$request->design_image->getClientOriginalName();
  //         $img = ImageC::make($request->design_image->getRealPath());
  //         $image2 =  $img->resize(800, null, function ($constraint) {
  //                     $constraint->aspectRatio();
  //                     })->save('images/'.$imageName);
          
  //         $imageNameFinal = 'images/'.$image2->basename;
  //         $img = new Image;
  //         $img->name = $imageNameFinal;
  //         $img->alt = Str::slug($imageNameFinal);
  //         $img->save();

  //         $design = Design::create([
  //           'product_id' => $id,
  //           'design_name' => $request->design_name,
  //           'design_price' => $request->design_price,
  //           'design_image' => $imageNameFinal,
  //           ]);
  //         }
  //         $product = Product::find($id);
  //         return view('admin.product.show',compact('product'));
  //       }

  //     public function designEdit(Design $design){
          
  //       return view('admin.design.edit',compact('design'));
        
  //     }

  //   public function designUpdate(Request $request,Design $design){ 
  //     $request->validate([
  //       'design_name' => 'required',
  //       'design_price' => 'required',
  //       'design_image' => '', 
  //       ]);
  //       if($request->hasFile('design_image')){ 

  //         if(Storage::disk('public')->exists($design->design_image)){
  //           Storage::disk('public')->delete($design->design_image);
  //           }
          
  //         $imageName = Str::random(3).$request->design_image->getClientOriginalName();
  //         $img = ImageC::make($request->design_image->getRealPath());
  //         $image2 =  $img->resize(800, null, function ($constraint) {
  //           $constraint->aspectRatio();
  //         })->save('images/'.$imageName);
          
  //         $imageNameFinal = 'images/'.$image2->basename;
  //         $img = new Image;
  //         $img->name = $imageNameFinal;
  //         $img->alt = Str::slug($imageNameFinal);
  //         $img->save();
  //       }else{
  //         $imageNameFinal = $design->design_image;
  //       }  
  //         $design->update([
  //           'design_name' => $request->design_name,
  //           'design_price' => $request->design_price,
  //           'design_image' => $imageNameFinal,
  //           ]);
  //         $product = $design->product;
  //         return view('admin.product.show',compact('product'));
  //     }


  //   public function designAdd(Request $request,$product){
     
  //        if($request->hasFile('design_image')){ 
 
  //        $imageName = Str::random(3).$request->design_image->getClientOriginalName();
  //        $img = ImageC::make($request->design_image->getRealPath());
  //        $image2 =  $img->resize(800, null, function ($constraint) {
  //                    $constraint->aspectRatio();
  //                    })->save('images/'.$imageName);
           
  //         $imageNameFinal = 'images/'.$image2->basename;
  //         $img = new Image;
  //         $img->name = $imageNameFinal;
  //         $img->alt = Str::slug($imageNameFinal);
  //         $img->save();
 
  //        Design::create([
  //          'design_image' => $imageNameFinal,
  //          'product_id' => $product->id,
  //          'design_name' => $request->design_name,
  //          'design_price' => $request->design_price,
  //        ]);
  //   }
  //  }

  //  public function designDelete(Design $design){
      
  //   if(Storage::disk('public')->exists($design->design_image)){
  //     Storage::disk('public')->delete($design->design_image);
  //     }
  //     $design->delete();
  //     $product = $design->product;
  //     return view('admin.product.show',compact('product'));
  //  }
}
