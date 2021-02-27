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
            'cep' => 'formato_cep',
            'rua' => 'string|max:255',
            'bairro' => 'string|max:255',
            'cidade' => 'string|max:255',
            'numero' => 'integer',
            'estado' => 'string|max:255',
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
}
