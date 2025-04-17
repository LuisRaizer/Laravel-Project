<?php

namespace App\Http\Middleware;

use Closure;

class AuthSession
{
    public function handle($request, Closure $next)
    {
        if (!session()->has('logado')) {
            return redirect('/login')->with('error', 'Acesso não autorizado');
        }

        return $next($request);
    }
}