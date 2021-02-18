<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadoBancario;

class DadoBancarioController extends Controller
{
    public function index()
    {
        return DadoBancario::all();
    }

    public function show($id)
    {
        $dadoBancario = DadoBancario::find($id);
        if (!empty($dadoBancario)) {
            return $dadoBancario;
        } else {
            return response(['message' => 'Dados bancários não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'agencia' => 'required|string|max:15',
            'conta' => 'required|string|max:15',
        ]);

        return DadoBancario::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'agencia' => 'string|max:15',
            'conta' => 'string|max:15',
        ]);

        $dadoBancario = DadoBancario::find($id);

        if (!empty($dadoBancario)) {
            $dadoBancario->fill($validatedData);
            $dadoBancario->save();
            return $dadoBancario;
        } else {
            return response(['message' => 'Dados bancários não encontrado']);
        }
    }

    public function destroy($id)
    {
        $dadoBancario = DadoBancario::find($id);

        if (!empty($dadoBancario)) {
            DadoBancario::find($id)->delete();
        } else {
            return response(['message' => 'Dados bancários não encontrado']);
        }
    }
}
