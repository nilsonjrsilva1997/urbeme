<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function resetarSenha(Request $request)
    {
        if($request->senha != $request->confirmar_senha) {
            return response(['message' => 'As senhas não são iguais']);
        }

        $user = \Auth::user();

        $user->password = bcrypt($request->senha);
        $user->save();
    }
}
