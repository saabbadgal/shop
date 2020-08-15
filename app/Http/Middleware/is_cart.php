<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class is_cart
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   
        if(Session::has('cart')){

        return $next($request);

        }else{
         return redirect()->route('shop.index');
        }
    }
}
