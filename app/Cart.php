<?php

namespace App;
use Illuminate\Support\Arr;
use Session;

class Cart 
{
   private $contents;
   public $totalQty;
   private $totalPrice;

  
   public function __construct($oldCart){
     
   	if($oldCart){
   
   		$this->contents = $oldCart->contents;
   		$this->totalQty = $oldCart->totalQty;
   		$this->totalPrice = $oldCart->totalPrice;
   	}
   }

   public function addProduct($product,$qty,$size){
      
      $q = $qty;
      if($product->discountPrice !== null){ 
        $price = $product->discountPrice;
      }else{
        $price = $product->price;
      }

      $products = ['qty' => 0, 'price' => $price, 'product' =>$product, 'size' => $size];
      
      if($this->contents){
       
      	  if(array_key_exists($product->slug.$size, $this->contents)){ 
            
      	$products = $this->contents[$product->slug.$size];

      	}
      }

        $products['qty'] +=$qty; 
      	$products['price'] = $price * $products['qty'];
      	$this->contents[$product->slug.$size] = $products;
      	$this->totalQty += $qty;
      	$this->totalPrice += $price * $qty;
      }

      public function removeProduct($product,$size){
       
       if($this->contents){
          
          if(array_key_exists($product->slug.$size, $this->contents)){

          	$rProduct = $this->contents[$product->slug.$size];
          
          	$this->totalQty -= $rProduct['qty'];
          	$this->totalPrice -= $rProduct['price'];
          	Arr::forget($this->contents, $product->slug.$size);
          	// array_forget($this->contents,$product->slug);
          }
      }
}


     public function updateProduct($product,$qty,$size){
      
      $q = $qty;
      if($product->discountPrice !== null){ 
        $price = $product->discountPrice;
      }else{
        $price = $product->price;
      }

      // $products = ['qty' => 0, 'price' => $price, 'product' =>$product, 'size' => $size];

      
      if($this->contents){
       
        if(array_key_exists($product->slug.$size, $this->contents)){ 
            
        $products = $this->contents[$product->slug.$size];

        }
      }
        $this->totalQty -= $products['qty'];
        $this->totalPrice -= $products['price'];
        $products['qty'] =$qty; 
        $products['price'] = $price * $products['qty'];
        $this->totalPrice += $price * $qty;
        $this->totalQty += $qty;
        $this->contents[$product->slug.$size] = $products;
      }

      

      public function getContents(){

      	return $this->contents;
      }
      public function getTotalQty(){

      	return $this->totalQty;
      }
      public function getTotalPrice(){

      	return $this->totalPrice;
      }

}
 
