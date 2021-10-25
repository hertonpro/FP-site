<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!auth()->check() ) {
            abort(401);
        }else{
            if (auth()->user()->role_id === 4) {
                abort(401); 
            }
        }
        return $next($request);
    }
}
