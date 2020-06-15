<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *auth_user,task_distr,order_mng,part_mng,admin
     */
    public function handle($request, Closure $next)
    {
      if(auth()->user()->roles == 'part_mng'){
                return redirect('parts');
            }
      else if(auth()->user()->roles == 'order_mng'){
                return redirect('orders ');
            }
      else if(auth()->user()->roles == 'task_distr'){
                return redirect('taskAsign');
            }
      else if(auth()->user()->roles == 'auth_user'){
                return redirect('employees');
            }
      else{
        return $next($request);
      }
    }
}
