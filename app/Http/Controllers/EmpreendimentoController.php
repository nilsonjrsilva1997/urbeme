<?php

namespace App\Http\Controllers;

use App\Models\Empreendimento;
use App\Models\Investimento;
use Illuminate\Http\Request;

class EmpreendimentoController extends Controller
{
    public function index()
    {
        $empreendimentos = Empreendimento::with('fotos')
            ->where('final_capitacao', '>=', date("Y-m-d"))
            ->with('endereco')
            ->with('incorporadora')
            ->get();
        $empreendimentosArray = [];

        foreach ($empreendimentos as $empreendimento) {
            $empreendimento['porcentagem'] = $empreendimento->calcularPorcentagem($empreendimento->id) . '%';
            $empreendimentosArray[] = $empreendimento;
        }

        return $empreendimentosArray;
    }

    public function getEmpreendimentoBySlug($slug)
    {
        $empreendimento = Empreendimento::where(['slug' => $slug])
            ->with('fotos')
            ->with('endereco')
            ->with('incorporadora')
            ->with(['investimento' => function ($query) {
                $query->with('usuario');
            }])
            ->first();

        if (!empty($empreendimento)) {
            $empreendimento['porcentagem'] = $empreendimento->calcularPorcentagem($empreendimento->id) . '%';
            return $empreendimento;
        } else {
            return response(['message' => 'Empreendimento não encontrado']);
        }
    }

    public function show($id)
    {
        $empreendimento = Empreendimento::where(['id' => $id])
            ->with('fotos')
            ->with('endereco')
            ->with('incorporadora')
            ->with('investimento')
            ->first();

        if (!empty($empreendimento)) {
            $empreendimento['porcentagem'] = $empreendimento->calcularPorcentagem($empreendimento->id) . '%';
            return $empreendimento;
        } else {
            return response(['message' => 'Empreendimento não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nome_projeto' => 'required|string|max:255',
            'endereco_id' => 'required|integer|exists:enderecos_incorporadora,id',
            'incorporadora_id' => 'required|integer|exists:incorporadoras,id',
            'url_video' => 'required|url',
            'descricao_projeto' => 'required|string|max:10000',
            'informacoes_empreendimento' => 'required|string|max:10000',
            'informacoes_oferta' => 'required|string|max:10000',
            'informacoes_prestacao_contas' => 'required|string|max:10000',
            'alerta_riscos' => 'required|string|max:10000',
            'caracteristica_oferta_tributacao_aplicavel' => 'required|string|max:10000',
            'estudo_viabilidade_economica' => 'required|string|max:10000',
            'outras_informacoes' => 'required|string|max:10000',
            'pacote_documentos_juridicos' => 'required|string|max:10000',
            'rentabilidade_anual_min' => 'required|numeric',
            'rentabilidade_anual_max' => 'required|numeric',
            'rentabilidade_minima_cdi' => 'required|numeric',
            'vencimento_titulo' => 'required|date',
            'tempo_projeto' => 'required|integer',
            'slug' => 'required|unique:empreendimentos,slug',
            'valor_total_capitacao' => 'required|numeric',
            'final_capitacao' => 'required|date',
            'andamento_obras' => 'required|numeric',
            'unidades_vendidas' => 'required|numeric',
        ]);

        $fileNameToStoreFundo = '';

        if ($request->hasFile('plano_fundo')) {
            $filenameWithExt = $request->file('plano_fundo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('plano_fundo')->getClientOriginalExtension();
            $fileNameToStoreFundo = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('plano_fundo')->storeAs('public/images', $fileNameToStoreFundo);
        } else {
            return response(['plano_fundo' => 'O plano de fundo é obrigatória']);
        }

        $validatedData['plano_fundo'] = $fileNameToStoreFundo;

        return Empreendimento::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome_projeto' => 'string|max:255',
            'endereco_id' => 'integer|exists:enderecos_incorporadora,id',
            'incorporadora_id' => 'integer|exists:incorporadoras,id',
            'url_video' => 'url',
            'descricao_projeto' => 'string|max:10000',
            'informacoes_empreendimento' => 'string|max:10000',
            'informacoes_oferta' => 'string|max:10000',
            'informacoes_prestacao_contas' => 'string|max:10000',
            'alerta_riscos' => 'string|max:10000',
            'caracteristica_oferta_tributacao_aplicavel' => 'string|max:10000',
            'estudo_viabilidade_economica' => 'string|max:10000',
            'outras_informacoes' => 'string|max:10000',
            'pacote_documentos_juridicos' => 'string|max:10000',
            'rentabilidade_anual_min' => 'numeric',
            'rentabilidade_anual_max' => 'numeric',
            'rentabilidade_minima_cdi' => 'numeric',
            'vencimento_titulo' => 'date',
            'tempo_projeto' => 'integer',
            'slug' => 'unique:empreendimentos,slug',
            'valor_total_capitacao' => 'numeric',
            'final_capitacao' => 'date',
            'andamento_obras' => 'numeric',
            'unidades_vendidas' => 'numeric',
        ]);

        $empreendimento = Empreendimento::find($id);

        if (!empty($empreendimento)) {

            $fileNameToStoreFundo = '';

            if ($request->hasFile('plano_fundo')) {
                $filenameWithExt = $request->file('plano_fundo')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('plano_fundo')->getClientOriginalExtension();
                $fileNameToStoreFundo = $filename . '_' . time() . '.' . $extension;
                $path = $request->file('plano_fundo')->storeAs('public/images', $fileNameToStoreFundo);
            } else {
                return response(['plano_fundo' => 'O plcano de fundo é obrigatória']);
            }

            $validatedData['plano_fundo'] = $fileNameToStoreFundo;

            $empreendimento->fill($validatedData);
            $empreendimento->save();
            return $empreendimento;
        } else {
            return response(['message' => 'Empreendimento não encontrado']);
        }
    }

    public function destroy($id)
    {
        $empreendimento = Empreendimento::find($id);

        if (!empty($empreendimento)) {
            Empreendimento::find($id)->delete();
        } else {
            return response(['message' => 'Empreendimento não encontrado']);
        }
    }

    public function getProjetosFinalizados()
    {
        $empreendimentos = Empreendimento::where(['final_capitacao', '<', date("Y-m-d")])
            ->with('endereco')
            ->with('incorporadora')
            ->get();

        $empreendimentosArray = [];

        foreach ($empreendimentos as $empreendimento) {
            $empreendimento['porcentagem'] = $empreendimento->calcularPorcentagem($empreendimento->id) . '%';
            $empreendimentosArray[] = $empreendimento;
        }


        return $empreendimentosArray;
    }

    public function porcentagemInvestimentos($empreendimento_id)
    {
        $valorInvestimentos = Investimento::where(['empreendimento_id' => $empreendimento_id])->sum('valor');
        $valorCapitacao = Empreendimento::where(['id' => $empreendimento_id])->select('valor_total_capitacao')->first()['valor_total_capitacao'];

        return ['porcentagem' => ($valorInvestimentos * 100) / $valorCapitacao];
    }
}
