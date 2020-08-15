<?php

namespace App\Http\Controllers\Shop;

use Session;
use App\Cart;
use App\Product;
Use App\User;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller;

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

   public function addToCart(Product $product,Request $request){
        
        $this->oldCart = Session::has('cart') ? Session::get('cart') : null;  
        $qty = $request->qty ? $request->qty : 1;

        $cart = new Cart($this->oldCart); 
        $cart->addProduct($product,$qty,$request->size); 
        $save =  Session::put('cart',$cart);
     
         return redirect()->route('cart.index');
   }

   public function removeProduct(Request $request,Product $product){ 

     $this->oldCart = Session::has('cart') ? Session::get('cart') : null;
      
     $cart = new Cart($this->oldCart);
     $cart->removeProduct($product,$request->size);
     Session::put('cart',$cart);

     return redirect()->route('cart.index');
   }

   public function updateProduct(Product $product,Request $request){
        
        $this->oldCart = Session::has('cart') ? Session::get('cart') : null;  
        $qty = $request->qty ? $request->qty : 1;

        $cart = new Cart($this->oldCart); 
        $cart->updateProduct($product,$qty,$request->size); 
        $save =  Session::put('cart',$cart);
     
        return redirect()->route('cart.index');
   }

   public function flash(){

     Session::forget('cart');
     return redirect()->route('cart.index');
   }
   
}
