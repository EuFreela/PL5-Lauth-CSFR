<?php

namespace Lameck\Lauth\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware;
use App\Http\kernel;


class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
       if(Auth::guard($guard)->guest())
        {
            if ($request->ajax() || $request->wantsJson())
            {
                return response('Unauthorized',401);
            }else{
                return redirect('/login/account/signin');
            }
        }
        return $next($request);
    }
}
