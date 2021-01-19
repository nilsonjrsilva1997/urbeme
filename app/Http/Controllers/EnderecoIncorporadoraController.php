<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Models\EnderecoIncorporadora;

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
            'nome' => 'required|string|max:255',
        ]);

        return EnderecoIncorporadora::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
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
