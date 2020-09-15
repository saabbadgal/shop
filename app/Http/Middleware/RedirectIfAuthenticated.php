<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Session;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {     

         if ($guard == "admin" && Auth::guard($guard)->check()) {
            return redirect('/admin/product');
         } 
         if ($guard == "web" && Auth::guard($guard)->check()) {
            return redirect('/');
         } 
             return $next($request); 

}
}
 
