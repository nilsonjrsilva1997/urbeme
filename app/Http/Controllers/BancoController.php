<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banco;

class BancoController extends Controller
{
    public function index()
    {
        return Banco::all();
    }

    public function show($id)
    {
        $banco = Banco::find($id);
        if (!empty($banco)) {
            return $banco;
        } else {
            return response(['message' => 'Banco não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'codigo_banco' => 'required|string|max:50',
            'nome_banco' => 'required|string|max:100',
        ]);

        return Banco::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'codigo_banco' => 'string|max:50',
            'nome_banco' => 'string|max:100',
        ]);

        $banco = Banco::find($id);

        if (!empty($banco)) {
            $banco->fill($validatedData);
            $banco->save();
            return $banco;
        } else {
            return response(['message' => 'Banco não encontrado']);
        }
    }

    public function destroy($id)
    {
        $banco = Banco::find($id);

        if (!empty($banco)) {
            Banco::find($id)->delete();
        } else {
            return response(['message' => 'Banco não encontrado']);
        }
    }
}
