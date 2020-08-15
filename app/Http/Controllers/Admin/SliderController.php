<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $sliders = Slider::all();
        return view('admin.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        // dd($request->all());
        $slider =  $request->validate([

         'image' => 'required',
         'heading_one' => 'required',
         'heading_two' => 'required',
         'heading_three' => 'required',
         'button_link' => 'required',

        ]);

        if($request->image){
 
        $imageName = time().'.' . $request->image->extension();
        $imageNameFinal = $request->image->storeAs('images', $imageName,'public');

         }



        $slider = new Slider;
        $slider->image = $imageNameFinal;
        $slider->heading_one = $request->heading_one;
        $slider->heading_two = $request->heading_two;
        $slider->heading_three = $request->heading_three;
        $slider->button_link = $request->button_link;
        $slider->save();

        if($slider){

        return redirect()->route('admin.slider.index');

        }else{

            return 'failed';
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
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $slider = Slider::find($id);
        return view('admin.slider.edit',compact('slider'));
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
        // dd($request->all());
        $slider_data =  $request->validate([ 

         'heading_one' => 'required',
         'heading_two' => 'required',
         'heading_three' => 'required',
         'button_link' => 'required',

        ]); 

        $slider = Slider::find($id);

        if($request->image){

            if(Storage::disk('public')->exists($slider->image)){

                Storage::disk('public')->delete($slider->image); 
            }

        $imageName = time().'.' . $request->image->extension();
        $imageNameFinal = $request->image->storeAs('images', $imageName,'public');

         }else{ 

          $imageNameFinal = $request->image_old;

         }

        $slider->image = $imageNameFinal;
        $slider->heading_one = $request->heading_one;
        $slider->heading_two = $request->heading_two;
        $slider->heading_three = $request->heading_three;
        $slider->button_link = $request->button_link;
        $slider->save();

        if($slider){

         return redirect()->route('admin.slider.index');

        }else{

            return 'failed';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::find($id);
       
        if(Storage::disk('public')->exists($slider->image)){
            Storage::disk('public')->delete($slider->image);
        $slider->delete();

        return redirect()->route('admin.slider.index');


    }
}
}
