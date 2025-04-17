<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function index()
    {
        $colaboradores = Colaborador::all();
        return view('colaboradores.index', compact('colaboradores'));
    }

    public function create()
    {
        return view('colaboradores.createColab');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome_completo' => 'required',
            'setor' => 'required',
            'cidade' => 'required',
            'checkin' => 'required|date',
        ]);

        Colaborador::create($request->all());
        return redirect()->route('colaboradores.index');
    }

    public function destroy($id)
    {
        Colaborador::destroy($id);
        return redirect()->route('colaboradores.index');
    }

    public function delete($id)
{
    $colaborador = Colaborador::findOrFail($id);
    return view('colaboradores.delete', compact('colaborador'));
}
}

