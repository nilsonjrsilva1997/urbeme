<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function index()
    {
        return Endereco::where(['user_id' => \Auth::id()])->first();
    }

    public function create(Request $request)
    {
        $validationRules = [
            'cep' => 'required|cep',
            'pais_id' => 'required|integer|exists:paises,id',
            'user_id' => 'required|integer|exists:users,id|unique:enderecos,user_id',
            'estado' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'rua' => 'required|string|max:255',
            'numero' => 'required|numeric',
            'complemento' => 'required|string|max:255',
        ];

        if (\Auth::user()->endereco->count() == 0) {
            $validatedData = $request->validate($validationRules);

            $userId = \Auth::id();
            $request['user_id'] = $userId;
            $endereco = \Auth::user()->endereco;

            
        }

        $userId = \Auth::id();
        $request['user_id'] = $userId;

        $validatedData = $request->validate([
            'cep' => 'required|cep',
            'pais_id' => 'required|integer|exists:paises,id',
            'user_id' => 'required|integer|exists:users,id|unique:enderecos,user_id',
            'estado' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'rua' => 'required|string|max:255',
            'numero' => 'required|numeric',
            'complemento' => 'required|string|max:255',
        ]);

        return Endereco::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $userId = \Auth::id();
        $request['user_id'] = $userId;
        $validatedData = $request->validate([
            'cep' => 'required|cep',
            'pais_id' => 'required|integer|exists:paises,id',
            'user_id' => 'required|integer|exists:users,id|unique:enderecos,user_id',
            'estado' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'rua' => 'required|string|max:255',
            'numero' => 'required|numeric',
            'complemento' => 'required|string|max:255',
        ]);

        if (\Auth::user()->dados_bancarios->count() == 0) {
            return response(['message' => 'Usuário não possui dados bancários cadastrados'], 422);
        }

        $Endereco = Endereco::find($id);

        if (!empty($Endereco)) {
            if ($Endereco['user_id'] != \Auth::id()) {
                return response(['message' => 'Dados do usuário não podem ser alterados'], 422);
            }

            $Endereco->fill($validatedData);
            $Endereco->save();
            return $Endereco;
        } else {
            return response(['message' => 'Dados bancários não encontrado']);
        }
    }

    public function destroy($id)
    {
        $Endereco = Endereco::find($id);

        if (!empty($Endereco)) {
            Endereco::find($id)->delete();
        } else {
            return response(['message' => 'Dados bancários não encontrado']);
        }
    }
}
