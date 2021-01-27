<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnderecoIncorporadora;

class EnderecoIncorporadoraController extends Controller
{
    public function index()
    {
        return EnderecoIncorporadora::all();
    }

    public function show($id)
    {
        $enderecoIncorporadora = EnderecoIncorporadora::find($id);
        if(!empty($enderecoIncorporadora)) {
            return $enderecoIncorporadora;
        } else {
            return response(['message' => 'Endereço da Imcoporadora não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'cep' => 'required|formato_cep',
            'rua' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'numero' => 'required|integer',
            'estado' => 'required|string|max:255',
        ]);

        return EnderecoIncorporadora::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cep' => 'formato_cep',
            'rua' => 'string|max:255',
            'bairro' => 'string|max:255',
            'cidade' => 'string|max:255',
            'numero' => 'integer',
            'estado' => 'string|max:255',
        ]);

        $enderecoIncorporadora = EnderecoIncorporadora::find($id);

        if(!empty($enderecoIncorporadora)) {
            $enderecoIncorporadora->fill($validatedData);
            $enderecoIncorporadora->save();
            return $enderecoIncorporadora;
        } else {
            return response(['message' => 'Endereço da Imcoporadora não encontrado']);
        }
    }

    public function destroy($id)
    {
        $enderecoIncorporadora = EnderecoIncorporadora::find($id);

        if(!empty($enderecoIncorporadora)) {
            EnderecoIncorporadora::find($id)->delete();
        } else {
            return response(['message' => 'Endereço da Imcoporadora não encontrado']);
        }
    }
}
