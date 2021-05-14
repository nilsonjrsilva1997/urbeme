<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empreendimento;

class EmpreendimentoController extends Controller
{
    public function index()
    {
        $empreendimentos = Empreendimento::query()
            ->with('fotos')
            ->with('endereco')
            ->with('incorporadora')
            ->with('incorporadora.logo')
            ->with('incorporadora.dados_incorporadora')
            ->where('final_capitacao', '>=', date("Y-m-d"))
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
            ->with('incorporadora.logo')
            ->with('incorporadora.dados_incorporadora')
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
            ->with('incorporadora.logo')
            ->with('incorporadora.dados_incorporadora')
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
            'descricao_projeto' => 'required|string',
            'tipo_investimento' => 'required|string',
            'tipo_recebimento' => 'required|string',
            'informacoes_empreendimento' => 'required|string',
            'informacoes_oferta' => 'required|string',
            'informacoes_prestacao_contas' => 'required|string',
            'alerta_riscos' => 'required|string',
            'caracteristica_oferta_tributacao_aplicavel' => 'required|string',
            'estudo_viabilidade_economica' => 'required|string',
            'outras_informacoes' => 'required|string',
            'pacote_documentos_juridicos' => 'required|string',
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

        $fileNameToStore = '';

        if ($request->hasFile('plano_fundo')) {
            $filenameWithExt = $request->file('plano_fundo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('plano_fundo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('plano_fundo')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['plano_fundo' => 'O plcano de fundo é obrigatória']);
        }

        $validatedData['plano_fundo'] = $fileNameToStore;

        return Empreendimento::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'nome_projeto' => 'string|max:255',
            'endereco_id' => 'integer|exists:enderecos_incorporadora,id',
            'incorporadora_id' => 'integer|exists:incorporadoras,id',
            'url_video' => 'url',
            'descricao_projeto' => 'string',
            'tipo_investimento' => 'string',
            'tipo_recebimento' => 'string',
            'informacoes_empreendimento' => 'string',
            'informacoes_oferta' => 'string',
            'informacoes_prestacao_contas' => 'string',
            'alerta_riscos' => 'string',
            'caracteristica_oferta_tributacao_aplicavel' => 'string',
            'estudo_viabilidade_economica' => 'string',
            'outras_informacoes' => 'string',
            'pacote_documentos_juridicos' => 'string',
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
            $empreendimento->delete();
            return true;
        } else {
            return response(['message' => 'Empreendimento não encontrado']);
        }
    }

    public function getProjetosFinalizados()
    {
        $empreendimentos = Empreendimento::where('final_capitacao', '<', date("Y-m-d"))
            ->with('endereco')
            ->with('incorporadora')
            ->with('investimento')
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
        $valorInvestimentos = \App\Models\Investimento::where(['empreendimento_id' => $empreendimento_id])->sum('valor');
        $valorCapitacao = \App\Models\Empreendimento::where(['id' => $empreendimento_id])->select('valor_total_capitacao')->first()['valor_total_capitacao'];

        return ['porcentagem' => ($valorInvestimentos * 100) / $valorCapitacao];
    }
}
