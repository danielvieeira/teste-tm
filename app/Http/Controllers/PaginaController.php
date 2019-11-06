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

        /**
         * Verifica se o nome contém menos de duas palavras.
         * Caso sim, retorna o formulário com os dados submetidos e uma mensagem de erro
         */
        if (str_word_count($dados['nome']) < 2) {
            return view('Formulario')->with('input', $dados)->withErrors('Nome incompleto');
        }

        // Retorna o formulário com os dados submetidos
        return view('Formulario')->with('dados', $dados);
    }
}
