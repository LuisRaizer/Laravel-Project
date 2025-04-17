<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function showLoginForm()
    {
        return view('colaboradores.user');
    }

    public function login(Request $request)
    {
        $emailCerto = 'admin@email.com';
        $senhaCerta = '123';

        if ($request->email == $emailCerto && $request->password == $senhaCerta) {
            session(['logado' => true]);
            return redirect('/');
        } else {
            return redirect('/login')->with('erro', 'Email ou senha estão errados');
        }
    }

    public function logout()
    {
    session()->forget('logado');
    return redirect('/login');
}
}
