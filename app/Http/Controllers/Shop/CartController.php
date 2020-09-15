<?php

namespace App\Http\Controllers\Shop;

use Session;
use App\Cart;
use App\Product;
Use App\User;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{   

   public $oldCart;
   public $carts;
   
   public function index(){ 
   
      if(Session::has('cart')){

        if(Session::get('cart')->totalQty == 0 || Session::get('cart')->totalQty ==  null ){
               $this->carts; 
         }else{
               $this->carts = Session::get('cart');
         }
    }
    $carts = $this->carts;

    return view('user.cart.index',compact('carts'));
   }
   
   public function selectProduct(Request $request,Product $product){ 

     Session::put('size', $request->size);
     $products = Product::where('type','with_design')->get();
     return view('user.shop.selectdesign',compact('products','product'));
   }

   public function selectDesign(Product $product,$design){
     
     $design = Product::find($design);
     $total = $product->price + $design->designPrice;
     return view('user.shop.afterselect',compact('product','design','total'));

   } 


   public function addToCart(Request $request,Product $product,Product $design = null){ 
        
        $this->oldCart = Session::has('cart') ? Session::get('cart') : null;  
        $qty = $request->qty ? $request->qty : 1;
        $size = $request->size ?? Session::get('size'); 
        $cart = new Cart($this->oldCart); 
        $cart->addProduct($product,$design ?? null,$size,$qty); 
        $save =  Session::put('cart',$cart);
     
         return redirect()->route('cart.index');
   }

   public function removeProduct(Request $request,Product $product){ 

     $this->oldCart = Session::has('cart') ? Session::get('cart') : null;
     $design = Product::find($request->design);
     $cart = new Cart($this->oldCart);
     $cart->removeProduct($product,$request->size,$design ?? null);
     Session::put('cart',$cart);

     return redirect()->route('cart.index');
   }

   public function updateProduct(Product $product,Request $request){
        // dd($request->design);
        $this->oldCart = Session::has('cart') ? Session::get('cart') : null;  
        $qty = $request->qty ? $request->qty : 1;
        $design = Product::find($request->design);
        $cart = new Cart($this->oldCart); 
        $cart->updateProduct($product,$qty,$request->size,$design ?? null); 
        $save =  Session::put('cart',$cart);
     
        return redirect()->route('cart.index');
   }

   public function flash(){

     Session::forget('cart');
     return redirect()->route('cart.index');
   }

   public function baseShoes(){
     
     $products = Product::with('sizes','images')->where('type','without_design')->latest()->get();
     return view('user.custom_shoe.baseshoes',compact('products'));

    }

    public function baseShoe($id){
     
      // dd($product);
      $product = Product::with('images','sizes')->where('id',$id)->first();
      // dd($product);
       return view('user.custom_shoe.baseshoe',compact('product'));
      
    }

    public function selectCustomSize(Request $request,$id){
      $product = Product::find($id);
      Session::put('size', $request->size);
     $products = Product::where('type','with_design')->get();
     return view('user.custom_shoe.selectdesign',compact('products','product'));
    }

    public function selectCustomDesign($product,$design){
      
      $product = Product::find($product);
     $design = Product::find($design);
     $total = $product->price + $design->designPrice;
     return view('user.custom_shoe.reviewcustomdesign',compact('product','design','total'));

    }
   
}
