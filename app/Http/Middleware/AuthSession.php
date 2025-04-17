<?php

namespace App\Http\Middleware;

use Closure;

class AuthSession
{
    public function handle($request, Closure $next)
{
    Log::info('Middleware AuthSession executado.');

    if (!session()->has('logado')) {
        Log::warning('Acesso não autorizado. Redirecionando para login.');
        return redirect('/')->with('erro', 'Acesso não autorizado');
    }

    return $next($request);
}
}