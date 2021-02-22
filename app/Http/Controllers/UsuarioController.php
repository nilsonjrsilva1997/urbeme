<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function salvarDadosPessoais(Request $request)
    {
        $userId = \Auth::id();
        $request['user_id'] = $userId;

        $validatedData = $request->validate([
            'data_nascimento' => 'required|date',
            'conta' => 'required|string|max:15',
            'banco_id' => 'required|integer|exists:bancos,id',
            'user_id' => 'required|unique:dados_bancarios,user_id',
        ]);

        return User::create($validatedData);
    }
}
