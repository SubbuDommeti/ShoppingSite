<?php

namespace App\Http\Middleware;
use  Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\RedirectResponse;

use Closure;
use auth;

class AdminMiddleware
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
        


        if(Auth::user()->userType=='Admin')
        {
            return $next($request);
        }
        else
        {
            return back()->with('Msg1','You are not allowed to access that page!!');
        }
    }
}

