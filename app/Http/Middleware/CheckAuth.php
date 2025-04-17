<?php

namespace App\Http\Middleware;

use Closure;

class CheckAuth 
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('logado')) {
            return redirect('/login')->with('error', 'Faça login primeiro!');
        }

        return $next($request);
    }
}