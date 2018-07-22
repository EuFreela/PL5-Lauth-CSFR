<?php

namespace Lameck\Lauth\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthRedirect
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
        if(Auth::check())
            return redirect('/dashboard/dash'); 
        return $next($request);
    }
}
