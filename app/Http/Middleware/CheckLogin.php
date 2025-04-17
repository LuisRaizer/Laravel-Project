<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('logado')) {
            return redirect('/login')->with('error', 'Por favor, faça login primeiro.');
        }

        return $next($request);
    }
}