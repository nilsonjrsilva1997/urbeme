<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvestimentoController extends Controller
{
    public function index()
    {
        return \App\Models\Investimento::where(['user_id' => \Auth::id()])->first();
    }

    public function create(Request $request)
    {
        $userId = \Auth::id();
        $request['user_id'] = $userId;

        $validatedData = $request->validate([
            'valor' => 'required|numeric',
            'codigo_indicacao' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'empreendimento_id' => 'required|integer|exists:empreendimentos,id'
        ]);

        return \App\Models\Investimento::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'valor' => 'numeric',
            'codigo_indicacao' => 'string|max:255',
            'user_id' => 'integer|exists:users,id',
            'empreendimento_id' => 'integer|exists:empreendimentos,id'
        ]);

        $investimento = \App\Models\Investimento::find($id);

        if(!empty($investimento)) {
            $investimento->fill($validatedData);
            $investimento->save();
            return $investimento;
        } else {
            return response(['message' => 'Investimento não encontrado']);
        }
    }

    public function destroy($id)
    {
        $investimento = \App\Models\Investimento::find($id);

        if (!empty($investimento)) {
            \App\Models\Investimento::find($id)->delete();
        } else {
            return response(['message' => 'Investimento não encontrado']);
        }
    }

    public function investidores($empreendimento_id)
    {
        return \App\Models\Empreendimento::where(['id' => $empreendimento_id])
        ->with('investimento.usuario')
        ->select('nome')
        ->get();
    }
}
