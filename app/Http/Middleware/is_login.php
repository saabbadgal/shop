<?php

namespace App\Http\Middleware;
use Session;
use Closure;

class is_login
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

          if(auth()->guard('web')->check()){
            return $next($request);
          }else{
            $cart = 'cart';
            Session::put('from',$cart);
            return redirect('login');
          }
}
}
