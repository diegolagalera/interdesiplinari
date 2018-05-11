<?php

namespace App\Http\Middleware;

use Closure;

class clearance
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
      if($request->is('productos')){
        if(!Auth::user()->hasRole('administrador')){
          abort(401);
        }
        else{
          return $next($request);
        }
      }
        return $next($request);

    }
}
