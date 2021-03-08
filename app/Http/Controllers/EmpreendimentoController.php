<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empreendimento;

class EmpreendimentoController extends Controller
{
    public function index()
    {
        $empreendimento = Empreendimento::with('fotos')->with('endereco')->get();
        return $empreendimento;
        
    }

    public function getEmpreendimentoBySlug($slug)
    {
        return Empreendimento::where(['slug' => $slug])->first();
    }

    public function show($id)
    {
        $empreendimento = Empreendimento::find($id);
        if(!empty($empreendimento)) {
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
            'url_video' => 'required|url',
            'descricao_projeto' => 'required|string|max:10000',
            'informacoes_incorporadora' => 'required|string|max:10000',
            'informacoes_empreendimento' => 'required|string|max:10000',
            'informacoes_oferta' => 'required|string|max:10000',
            'informacoes_prestacao_contas' => 'required|string|max:10000',
            'alerta_riscos' => 'required|string|max:10000',
            'caracteristica_oferta_tributacao_aplicavel' => 'required|string|max:10000',
            'estudo_viabilidade_economica' => 'required|string|max:10000',
            'outras_informacoes' => 'required|string|max:10000',
            'pacote_documentos_juridicos' => 'required|string|max:10000',
            'live_incorporadora' => 'required|url',
            'site_incorporadora' => 'required|url',
            'rentabilidade_anual' => 'required|string|max:255',
            'rentabilidade_minima' => 'required|string|max:255',
            'vencimento_titulo' => 'required|date',
            'status' => 'required|in:FINALIZADO,ATIVO',
            'slug' => 'required|unique:empreendimentos,slug',
            'valor_total_capitacao' => 'required|numeric',
        ]);

        $fileNameToStore = '';

        if($request->hasFile('logo_incoporadora')) {
            $filenameWithExt = $request->file('logo_incoporadora')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo_incoporadora')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('logo_incoporadora')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['logo_incoporadora' => 'O logo da incorporadora é obrigatória']);
        }

        $validatedData['logo_incoporadora'] = $fileNameToStore;

        $fileNameToStore = '';

        if($request->hasFile('plano_fundo')) {
            $filenameWithExt = $request->file('plano_fundo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('plano_fundo')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
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
            'url_video' => 'url',
            'descricao_projeto' => 'string|max:10000',
            'informacoes_incorporadora' => 'string|max:10000',
            'informacoes_empreendimento' => 'string|max:10000',
            'informacoes_oferta' => 'string|max:10000',
            'informacoes_prestacao_contas' => 'string|max:10000',
            'alerta_riscos' => 'string|max:10000',
            'caracteristica_oferta_tributacao_aplicavel' => 'string|max:10000',
            'estudo_viabilidade_economica' => 'string|max:10000',
            'outras_informacoes' => 'string|max:10000',
            'pacote_documentos_juridicos' => 'string|max:10000',
            'live_incorporadora' => 'url',
            'site_incorporadora' => 'url',
            'rentabilidade_anual' => 'string|max:255',
            'rentabilidade_minima' => 'string|max:255',
            'vencimento_titulo' => 'date',
            'status' => 'in:FINALIZADO,ATIVO',
            'slug' => 'unique:empreendimentos,slug',
            'valor_total_capitacao' => 'numeric',
        ]);

        $empreendimento = Empreendimento::find($id);

        if(!empty($empreendimento)) {
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

        if(!empty($empreendimento)) {
            Empreendimento::find($id)->delete();
        } else {
            return response(['message' => 'Empreendimento não encontrado']);
        }
    }

    public function getProjetosFinalizados()
    {
        return Empreendimento::where(['status' => 'FINALIZADO'])->get();
    }

    public function porcentagemInvestimentos($empreendimento_id)
    {
        $valorInvestimentos = \App\Models\Investimento::where(['empreendimento_id' => $empreendimento_id])->sum('valor');
        $valorCapitacao = \App\Models\Empreendimento::where(['id' => $empreendimento_id])->select('valor_total_capitacao')->first()['valor_total_capitacao'];

        return ['porcentagem' => ($valorInvestimentos * 100) / $valorCapitacao];
    }
}
