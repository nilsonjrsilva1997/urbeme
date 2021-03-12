<?php

namespace App\Http\Controllers;

use App\Models\Investimento;
use Auth;
use Illuminate\Http\Request;

class InvestimentoController extends Controller
{
    public function index()
    {
        return Investimento::where(['user_id' => Auth::id()])
            ->with(['empreendimento' => function ($query) {
                $query->with('endereco');
                $query->with('incorporadora');
            }])->get();
    }

    public function create(Request $request)
    {
        $userId = Auth::id();
        $request['user_id'] = $userId;

        $validatedData = $request->validate([
            'valor' => 'required|numeric',
            'codigo_indicacao' => 'required|string|max:255',
            'user_id' => 'required|integer|exists:users,id',
            'empreendimento_id' => 'required|integer|exists:empreendimentos,id'
        ]);

        return Investimento::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'valor' => 'numeric',
            'codigo_indicacao' => 'string|max:255',
            'user_id' => 'integer|exists:users,id',
            'empreendimento_id' => 'integer|exists:empreendimentos,id'
        ]);

        $investimento = Investimento::find($id);

        if (!empty($investimento)) {
            $investimento->fill($validatedData);
            $investimento->save();
            return $investimento;
        } else {
            return response(['message' => 'Investimento não encontrado']);
        }
    }

    public function destroy($id)
    {
        $investimento = Investimento::find($id);

        if (!empty($investimento)) {
            Investimento::find($id)->delete();
        } else {
            return response(['message' => 'Investimento não encontrado']);
        }
    }

    public function investidores($empreendimento_id)
    {
        return Investimento::where(['empreendimento_id' => $empreendimento_id])
            ->with('usuario')
            ->get();
    }

    public function getBySlug($slug)
    {
        return Investimento::where(['user_id' => Auth::id()])
            ->whereHas('empreendimento', function ($query) use ($slug) {
                $query->where('slug', '=', $slug);
            })
            ->with(['empreendimento' => function ($query) {
                $query->with('endereco')
                    ->with('incorporadora');
            }])->first();
    }
}
