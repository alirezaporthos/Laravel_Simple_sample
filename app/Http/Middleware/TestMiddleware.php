<?php

namespace App\Http\Middleware;

use Closure;

class TestMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $inp)
    {
        echo($inp."<br>");
        echo('goje<br>');
        //$r= $next($request);
        return $next($request);
        echo('kalam');
        return $r;
    }
}
