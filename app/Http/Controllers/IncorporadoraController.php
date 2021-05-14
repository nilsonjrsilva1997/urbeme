<?php

namespace App\Http\Controllers;

use App\Models\Empreendimento;
use Illuminate\Http\Request;
use App\Models\Incorporadora;
use Auth;
use Illuminate\Support\Facades\Hash;

class IncorporadoraController extends Controller
{

    public function index()
    {
        $incorporadoras = Incorporadora::query()
            ->with('dados_incorporadora')
            ->with('logo')
            ->with('endereco_incorporadora')
            ->with('socios')
            ->get();

        return $incorporadoras;
    }

    public function me()
    {
        return Auth::user()
            ->with('dados_incorporadora')
            ->with('logo')
            ->with('endereco_incorporadora')
            ->with('socios')
            ->first();
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'cnpj' => 'required|string|max:255|cnpj',
            'razao_social' => 'required|string|max:255',
            'nome_fantasia' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:incorporadoras,email',
            'celular' => 'required|string|max:255',
            'password' => 'required|string|max:255|confirmed',
        ]);

        $validatedData['password'] = bcrypt($request->password);
        $incorporadora = Incorporadora::create($validatedData);
        $accessToken = $incorporadora->createToken('authToken')->accessToken;

        return response(['incorporadora' => $incorporadora, 'access_token' => $accessToken]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            "email" => "email|required",
            "password" => "required",
        ]);

        if (!Auth::guard('incorporadora')->attempt($loginData)) {
            return response(['message' => 'Dados inválidos']);
        }

        $accessToken = Auth::guard('incorporadora')->user()->createToken('authToken')->accessToken;

        return response(['user' => Auth::guard('incorporadora')->user(), 'access_token' => $accessToken]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'razao_social' => 'string|max:255',
            'nome_fantasia' => 'string|max:255',
            'celular' => 'string|max:255',
        ]);

        $incorporadora = Auth::user();

        $incorporadora->fill($validatedData);
        $incorporadora->save();

        return $incorporadora;
    }

    public function getEmpreendimentos()
    {

        $incorporadora_id = Auth::id();

        $empreendimentos = Empreendimento::query()
            ->with('endereco')
            ->with('fotos')
            ->with('investimento')
            ->where('incorporadora_id', $incorporadora_id)
            ->get();

        $empreendimentosArray = [];

        foreach ($empreendimentos as $empreendimento) {
            $empreendimento['porcentagem'] = $empreendimento->calcularPorcentagem($empreendimento->id) . '%';
            $empreendimentosArray[] = $empreendimento;
        }

        return $empreendimentosArray;
    }
}
