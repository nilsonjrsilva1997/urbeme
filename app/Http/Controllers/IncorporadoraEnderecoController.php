<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IncorporadoraEndereco;
use Auth;

class IncorporadoraEnderecoController extends Controller
{
    public function index()
    {
        return IncorporadoraEndereco::all();
    }

    public function show($id)
    {
        $incorporadoraEndereco = IncorporadoraEndereco::findOrFail($id);
        return $incorporadoraEndereco;
    }

    public function create(Request $request)
    {
        $request['incorporadora_id'] = Auth::id();
        $validatedData = $request->validate([
            'cep' => 'required|formato_cep',
            'bairro' => 'required|string|max:255',
            'numero' => 'required|integer',
            'rua' => 'required|string|max:255',
            'cidade' => 'required|string|max:255',
            'estado' => 'required|string|max:255',
            'incorporadora_id' => 'required|integer|exists:incorporadoras,id',
        ]);

        return IncorporadoraEndereco::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'cep' => 'formato_cep',
            'bairro' => 'string|max:255',
            'numero' => 'integer',
            'rua' => 'string|max:255',
            'cidade' => 'string|max:255',
            'estado' => 'string|max:255',
        ]);

        $incorporadoraEndereco = IncorporadoraEndereco::findOrFail($id);
        $incorporadoraEndereco->fill($validatedData);
        $incorporadoraEndereco->save();
        return $incorporadoraEndereco;
    }

    public function destroy($id)
    {
        $incorporadoraEndereco = IncorporadoraEndereco::findOrFail($id);
        $incorporadoraEndereco->delete();
    }
}
