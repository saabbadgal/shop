<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $tbale = 'order_status';

    public function order(){

    	return $this->belongsTO('App\OrderStatus');
    }
}
