<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Socios;
use Auth;

class SociosController extends Controller
{
    public function index()
    {
        return Socios::all();
    }

    public function show($id)
    {
        $socios = Socios::findOrFail($id);
        return $socios;
    }

    public function create(Request $request)
    {
        $request['incorporadora_id'] = Auth::id();

        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|cpf',
            'email' => 'required|email',
            'celular' => 'required|celular_com_ddd',
            'data' => 'required|date',
            'incorporadora_id' => 'required|integer|exists:incorporadoras,id',
        ]);

        return Socios::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
            'cpf' => 'cpf',
            'email' => 'email',
            'celular' => 'celular_com_ddd',
            'data' => 'date',
        ]);

        $socios = Socios::findOrFail($id);
        $socios->fill($validatedData);
        $socios->save();
        return $socios;
    }

    public function destroy($id)
    {
        $socios = Socios::findOrFail($id);
        $socios->delete();
    }
}
