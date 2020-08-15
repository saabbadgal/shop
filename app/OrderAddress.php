<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderAddress extends Model
{
   protected $table = 'order_address';

   public function orders(){

     return $this->hasMany('App\Order');
    }

}
