<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'images';

    protected $guarded = [];

    public function products(){

    	return $this->belongsToMany('App\Product','image_product');
    }
}
