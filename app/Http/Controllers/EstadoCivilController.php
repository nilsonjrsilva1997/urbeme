<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EstadoCivil;

class EstadoCivilController extends Controller
{
    public function index()
    {
        return EstadoCivil::all();
    }

    public function show($id)
    {
        $estadoCivil = EstadoCivil::find($id);
        if(!empty($estadoCivil)) {
            return $estadoCivil;
        } else {
            return response(['message' => 'Estado civil não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        return EstadoCivil::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome' => 'string|max:255',
        ]);

        $estadoCivil = EstadoCivil::find($id);

        if(!empty($estadoCivil)) {
            $estadoCivil->fill($validatedData);
            $estadoCivil->save();
            return $estadoCivil;
        } else {
            return response(['message' => 'Estado civil não encontrado']);
        }
    }

    public function destroy($id)
    {
        $estadoCivil = EstadoCivil::find($id);

        if(!empty($estadoCivil)) {
            EstadoCivil::find($id)->delete();
        } else {
            return response(['message' => 'Estado civil não encontrado']);
        }
    }
}
