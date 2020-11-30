<?php

namespace App\Http\Middleware;

use Closure;


class IsLawyer
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {
    
               if(Auth::guard('lawyer')->check()){
                   return redirect()->route('/');
               }
        
    }
}
