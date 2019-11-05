<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function exibirFormulario()
    {
        return view('Formulario');
    }

    public function exibirFormularioComDados(Request $request)
    {
        // Recupera os dados passados no post
        $dados = $request->only('nome', 'texto');

        return view('Formulario')->with('dados', $dados);
    }
}
