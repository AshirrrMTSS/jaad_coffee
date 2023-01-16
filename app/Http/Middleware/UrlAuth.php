<?php

namespace App\Http\Middleware;

use Closure;

class UrlAuth
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
        if(!empty($request->page)){

            return $next($request);
        }
    }
}
