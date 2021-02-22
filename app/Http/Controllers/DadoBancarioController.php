<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DadoBancario;

class DadoBancarioController extends Controller
{
    public function index()
    {
        return DadoBancario::where(['user_id' => \Auth::id()])->first();
    }

    public function create(Request $request)
    {
        $userId = \Auth::id();
        $request['user_id'] = $userId;

        $validatedData = $request->validate([
            'agencia' => 'required|string|max:15',
            'conta' => 'required|string|max:15',
            'banco_id' => 'required|integer|exists:bancos,id',
            'user_id' => 'required|unique:dados_bancarios,user_id',
        ]);

        return DadoBancario::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'agencia' => 'string|max:15',
            'conta' => 'string|max:15',
            'banco_id' => 'integer|exists:bancos,id',
        ]);

        if(\Auth::user()->dados_bancarios->count() == 0)
        {
            return response(['message' => 'Usuário não possui dados bancários cadastrados'], 422);
        }

        $dadoBancario = DadoBancario::find($id);

        if (!empty($dadoBancario)) {
            if($dadoBancario['user_id'] != \Auth::id()) {
                return response(['message' => 'Dados do usuário não podem ser alterados'], 422);
            }
            
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
