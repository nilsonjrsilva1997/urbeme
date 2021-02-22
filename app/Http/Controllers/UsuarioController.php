<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function salvarDadosPessoais(Request $request)
    {
        $validatedData = $request->validate([
            'data_nascimento' => 'required|date',
            'estado_civil_id' => 'required|integer|exists:estado_civis,id',
            'cpf' => 'required|cpf',
            'rg' => 'required|string|max:20',
            'profissao' => 'required|string|max:255',
            'empresa' => 'required|string|max:255',
            'celular' => 'required|celular',
            'telefone' => 'required|celular',
            'sexo' => 'required|in:MASCULINO,FEMININO,OUTRO',
        ]);

        $user = \Auth::user();
        return $user->fill($validatedData);
    }
}
