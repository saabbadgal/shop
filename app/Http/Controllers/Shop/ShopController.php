<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;
use App\Slider;

class ShopController extends Controller
{
   
    public function index()
    {   
        $sliders = Slider::all();
        $products = Product::with('sizes','images')->where('type','with_design')->latest()->take(6)->get();
        return view('user.shop.index',compact('products','sliders'));
    }

    public function shop()
    {   
        $products = Product::with('sizes','images')->where('type','with_design')->latest()->take(6)->get();
        // $products = Product::with('sizes','images')->get();
        return view('user.shop.shop',compact('products'));
    }

    public function shopBy($category)
    {   
        $products = Product::with('sizes','images')->where('idealFor',$category)->where('type','with_design')->get();
        return view('user.shop.shop',compact('products'));
    } 
    
    public function show($id,$slug)
    {
        $product  = Product::with('images','sizes')->where('id',$id)->first();
        return view('user.shop.show',compact('product'));
    }

    public function about(){

        return view('user.shop.about');
    }

    public function gallery(){

        return view('user.shop.gallery');
    }

    public function konzept(){

        return view('user.shop.konzept');
    }

   
}
