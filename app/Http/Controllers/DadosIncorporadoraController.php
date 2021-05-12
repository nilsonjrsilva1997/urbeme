<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\DadosIncorporadora;
use Auth;

class DadosIncorporadoraController extends Controller
{
    public function index()
    {
        return DadosIncorporadora::all();
    }

    public function show($id)
    {
        $dadosIncorporadora = DadosIncorporadora::findOrFail($id);
        return $dadosIncorporadora;
    }

    public function create(Request $request)
    {
        $request['incorporadora_id'] = Auth::id();

        $validatedData = $request->validate([
            'url_live' => 'required|string|max:255|url',
            'url_site' => 'required|string|max:255|url',
            'cpf' => 'required|cpf',
            'incorporadora_id' => 'required|integer|exists:incorporadoras,id',
        ]);

        return DadosIncorporadora::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'url_live' => 'string|max:255',
            'url_site' => 'string|max:255',
            'cpf' => 'cpf',
        ]);

        $dadosIncorporadora = DadosIncorporadora::findOrFail($id);
        $dadosIncorporadora->fill($validatedData);
        $dadosIncorporadora->save();
        return $dadosIncorporadora;
    }

    public function destroy($id)
    {
        $dadosIncorporadora = DadosIncorporadora::findOrFail($id);
        $dadosIncorporadora->delete();
    }
}
