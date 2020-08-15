<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{   
    
    protected $guarded = []; 
    
   public function sizes(){

    return $this->belongsToMany('App\Size','product_size');
		
	}
   public function users(){

    return $this->hasMany('App\User','product_user','rpduct_id','user_id');
		
	}

  public function priceDollar(){

             return '$' .    $this->price;
  }
    public function discountPriceDollar(){

             return '$' .    $this->discountPrice;
  }

  public function priceFormat(){

     return "$".$this->price;
  }
  public function discountPriceFormat(){

     return "$".$this->discountPrice;
  }

   public function images(){

      return $this->belongsToMany('App\Image','image_product');
    }

    public function carts(){

        return $this->hasMany('App\Cart','user_id','id')->with('product');
    }

   public function orders(){

     return $this->belongsToMany('App\Order','order_product','order_id','product_id');

   }
  
    public function path(){

        return url("product/{$this->id}-{$this->slug}");
    }
  

}
