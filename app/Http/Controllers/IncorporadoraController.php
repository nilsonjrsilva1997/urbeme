<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Incorporadora;
use Auth;
use Illuminate\Support\Facades\Hash;

class IncorporadoraController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'cnpj' => 'required|string|max:255|cnpj',
            'razao_social' => 'required|string|max:255',
            'nome_fantasia' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:incorporadoras,email',
            'celular' => 'required|string|max:255',
            'senha' => 'required|string|max:255|confirmed',
        ]);

        $validatedData['senha'] = bcrypt($request->senha);
        $incorporadora = Incorporadora::create($validatedData);
        $accessToken = $incorporadora->createToken('authToken')->accessToken;

        return response(['incorporadora' => $incorporadora, 'access_token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            "email" => "email|required",
            "senha" => "required",
        ]);

        $incorporadora = Incorporadora::where(['email' => $loginData['email']])->first();

        if(empty($incorporadora)) {
            return response(['message' => 'Dados inválidos']);
        }        

        if (!Hash::check($loginData['senha'], $incorporadora->senha)) {
            return response(['message' => 'Dados inválidos']);
        }

        $accessToken = $incorporadora->createToken('authToken')->accessToken;

        return response(['incorporadora' => $incorporadora, 'access_token' => $accessToken]);
    }
}
