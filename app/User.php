<?php

namespace App;
 
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable; 
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'name', 'email', 'password','role_id','phone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     protected $casts = [
    */
   

    public function role(){

        return $this->belongsTo('App\Role','role_id','id');
    }

    public function products(){

        return $this->belongsToMany('App\Product','product_user','user_id','product_id');
    }

    public function carts(){

        return $this->hasMany('App\Cart','user_id','id')->with('product');
    }

    public function addresses(){

        return $this->hasMany('App\Address','user_id','id');
    }

    public function orders(){

        return $this->hasMany('App\Order');
    }
}
