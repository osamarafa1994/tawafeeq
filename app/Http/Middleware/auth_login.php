<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class auth_login
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
        if(Auth::user()){
            if(Auth::user()->status == 1){
                return $next($request);
            }
            return redirect('not_authorized');
        }else{
            return redirect('not_authorized');
        }

        // return $next($request);
    }
}
