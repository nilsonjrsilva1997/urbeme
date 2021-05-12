<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\AdmUser;

class AuthAdmController extends Controller
{
    public function index()
    {
        return Auth::user();
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'cpf' => 'required|cpf',
            'phone' => 'required|celular_com_ddd',
            'password' => 'required|string|max:255|confirmed',
        ]);

        $validatedData['password'] = bcrypt($request->password);
        $admUser = AdmUser::create($validatedData);
        $accessToken = $admUser->createToken('authToken')->accessToken;

        return response(['ADM' => $admUser, 'access_token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            "email" => "email|required",
            "password" => "required",
        ]);

        if (!Auth::guard('adm')->attempt($loginData)) {
            return response(['message' => 'Dados inválidos']);
        }

        $accessToken = Auth::guard('adm')->user()->createToken('authToken')->accessToken;

        return response(['user' => Auth::guard('adm')->user(), 'access_token' => $accessToken]);
    }
}
