<?php

namespace App;
use Session;
use App\Product;
use Illuminate\Support\Arr;

class Cart 
{  
   public $price;
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

   public function addProduct(Product $product,Product $design = null,$size,$qty){
      
      $q = $qty;
      if($design == null){
        $totalPrice = $product->price;
      }else{
        $totalPrice = $this->totalPrice($product,$design);
      }
      $this->price = $totalPrice;
      $designPrice = $design->designPrice ?? null;
      $products = [
                   'product' =>$product, 
                   'design' => $design,
                   'productPrice' => $product->price, 
                   'design_price' => $designPrice,
                   'totalPrice' => $totalPrice, 
                   'qty' => 0,
                   'size' => $size, 
                  ];
      
      if($this->contents){
        if(isset($design->name)){
          if(array_key_exists($product->slug.$size.$design->name, $this->contents)){ 
            
            $products = $this->contents[$product->slug.$size.$design->name];

           }
        }else{

          if(array_key_exists($product->slug.$size, $this->contents)){ 
            
            $products = $this->contents[$product->slug.$size];

           }

        }

        if(isset($design->name)){
          if(array_key_exists($product->slug.$size.$design->name, $this->contents)){ 
            
            $products = $this->contents[$product->slug.$size.$design->name];

           }
        }else{
          if(array_key_exists($product->slug.$size, $this->contents)){ 
            
            $products = $this->contents[$product->slug.$size];

           }
        }
          
      	 
      }

        $products['qty'] +=$qty; 
        $products['price'] = $totalPrice * $products['qty'];
        if(isset($design->name)){
          $this->contents[$product->slug.$size.$design->name] = $products;
        }else{
          $this->contents[$product->slug.$size] = $products;
           
        }
      	$this->totalQty += $qty;
      	$this->totalPrice += $totalPrice * $qty;
      }

      public function totalPrice(Product $product,Product $design){ 

        $productPrice = $product->price;
        $designPrice = $design->designPrice;
        $totalPrice = $productPrice + $designPrice; 
        return $totalPrice;   
      }

      public function removeProduct(Product $product,$size,Product $design = null){
      //  dd($design);
       if($this->contents){
        if(isset($design->name)){
          if(array_key_exists($product->slug.$size.$design->name, $this->contents)){

          	$rProduct = $this->contents[$product->slug.$size.$design->name];
          
          	$this->totalQty -= $rProduct['qty'];
          	$this->totalPrice -= $rProduct['price'];
          	Arr::forget($this->contents, $product->slug.$size.$design->name);
          	// array_forget($this->contents,$product->slug);
          }
        }else{

          if(array_key_exists($product->slug.$size, $this->contents)){

          	$rProduct = $this->contents[$product->slug.$size];
          
          	$this->totalQty -= $rProduct['qty'];
          	$this->totalPrice -= $rProduct['price'];
          	Arr::forget($this->contents, $product->slug.$size);
          	// array_forget($this->contents,$product->slug);
          }
        }
      }
}


     public function updateProduct(Product $product,$qty,$size,Product $design = null){
      
      $q = $qty;
      
      if($design == null){
        $totalPrice = $product->price;
      }else{
        $totalPrice = $this->totalPrice($product,$design);
      }
       

      // $products = ['qty' => 0, 'price' => $price, 'product' =>$product, 'size' => $size];

      
      if($this->contents){
       if(isset($design->name)){
        if(array_key_exists($product->slug.$size.$design->name, $this->contents)){ 
            
          $products = $this->contents[$product->slug.$size.$design->name];
        }
       }else{
        if(array_key_exists($product->slug.$size, $this->contents)){ 
            
          $products = $this->contents[$product->slug.$size];
        }
       }
        
      }
        $this->totalQty -= $products['qty'];
        $this->totalPrice -= $products['price'];
        $products['qty'] =$qty; 
        $products['price'] = $totalPrice * $products['qty'];
        $this->totalPrice += $totalPrice * $qty;
        $this->totalQty += $qty;
        if(isset($design->name)){

          $this->contents[$product->slug.$size.$design->name] = $products;
        }else{

          $this->contents[$product->slug.$size] = $products;
        }
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
 
