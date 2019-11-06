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

        if (str_word_count($dados['nome']) < 2) {
            return view('Formulario')->with('input', $dados)->withErrors('Nome incompleto');
        }

        return view('Formulario')->with('dados', $dados);
    }
}
