<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            "nome" => "required|string|max:255",
            "sobre_nome" => "required|string|max:255",
            "email" => "required|email|unique:users,email",
            "password" => "required|confirmed",
        ]);

        $validatedData['password'] = bcrypt($request->password);
        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;

        $signer = $this->createUserClickSign($validatedData);

        if (isset($signer['signer'])) {
            $user->signer_id = $signer['signer']['key'];
        }

        $user->save();

        return response(['user' => $user, 'access_token' => $accessToken]);
    }

    public function createUserClickSign($user)
    {
        $signatarioData = [
            "signer" => [
                "email" => $user['email'],
                "auths" => [
                    "email"
                ],
                "has_documentation" => false,
                "selfie_enabled" => false,
                "handwritten_enabled" => false,
                "official_document_enabled" => false
            ]
        ];

        $clickSignUser = Http::post('https://sandbox.clicksign.com/api/v1/signers?access_token=' . env('TOKEN_CLICK_SING'), $signatarioData, []);

        return $clickSignUser->json();
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            "email" => "email|required",
            "password" => "required",
        ]);

        if (!auth()->attempt($loginData)) {
            return response(['message' => 'Dados inválidos']);
        }

        $accessToken = auth()->user()->createToken('authToken')->accessToken;

        return response(['user' => auth()->user(), 'access_token' => $accessToken]);
    }
}
