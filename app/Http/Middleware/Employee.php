<?php

namespace App\Http\Middleware;

use Closure;

class Employee
{
    /**
     * Handle an incoming request.
     * auth_user,task_distr,order_mng,part_mng,admin
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
     public function handle($request, Closure $next)
     {
       if(auth()->user()->roles != 'auth_user'){
                 return redirect('home');
             }
       else{
         return $next($request);
       }
     }
}
