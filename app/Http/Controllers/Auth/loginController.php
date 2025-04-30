<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/colaboradores');
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas',
        ]);
    }

    public function destroy(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        return redirect('/');
    }
}