<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $guarded = [];

    public function products(){

    	return $this->belongsToMany('App\Product','order_product','order_id','product_id')->withPivot('price','size','color','qty');
    }

    public function statuses(){

    	return $this->hasMany('App\OrderStatus');
    }

    public function user(){

    	return $this->belongsTo('App\User');
    }

    public function address(){

    	return $this->belongsTo('App\OrderAddress');
    }
}
