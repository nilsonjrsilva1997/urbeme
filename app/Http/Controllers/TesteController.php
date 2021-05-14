<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Teste;

class TesteController extends Controller
{
    public function index()
    {
        return Teste::all();
    }

    public function show($id)
    {
        $teste = Teste::findOrFail($id);
        return $teste;
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
                    'nome' => 'required|string|max:255',
        ]);

        return Teste::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
                    'nome' => 'string|max:255',
        ]);

        $teste = Teste::findOrFail($id);
        $teste->fill($validatedData);
        $teste->save();
        return $teste;
    }

    public function destroy($id)
    {
        $teste = Teste::findOrFail($id);
        $teste->delete();
    }
}
