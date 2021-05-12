<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EnderecoIncorporadoraUser;

class EnderecoIncorporadoraUserController extends Controller
{
    public function index()
    {
        return EnderecoIncorporadoraUser::all();
    }

    public function show($id)
    {
        $enderecoIncorporadoraUser = EnderecoIncorporadoraUser::findOrFail($id);
        return $enderecoIncorporadoraUser;
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'cep' => 'required|string|max:255|formato_cep',
            'rua' => 'required|string|max:255',
            'bairro' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'numero' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
        ]);

        return EnderecoIncorporadoraUser::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cep' => 'string|max:255|formato_cep',
            'rua' => 'string|max:255',
            'bairro' => 'string|max:255',
            'cidade' => 'string|max:255',
            'numero' => 'string|max:255',
            'estado' => 'string|max:255',
        ]);

        $enderecoIncorporadoraUser = EnderecoIncorporadoraUser::findOrFail($id);
        $enderecoIncorporadoraUser->fill($validatedData);
        $enderecoIncorporadoraUser->save();
        return $enderecoIncorporadoraUser;
    }

    public function destroy($id)
    {
        $enderecoIncorporadoraUser = EnderecoIncorporadoraUser::findOrFail($id);
        $enderecoIncorporadoraUser->delete();
    }
}
