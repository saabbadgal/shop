<?php

namespace App\Http\Middleware;

use Closure;

class is_super
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
        
        if(Auth('admin')->check() && auth('admin')->user()->is_super == 1){
            
           // dd('saab');
          return $next($request);

        }

         return redirect('admin/login');
    }
}
