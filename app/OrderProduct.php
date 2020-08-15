<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = "order_product";

    protected $guarded = [];

      public function order(){

      return $this->belongsTo('App\Order');
    }

    public function products(){

    	return $this->belongsToMany('App\Product');
    }
}
