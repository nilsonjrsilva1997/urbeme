<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FotosEmpreendimento;

class FotoEmpreendimentoController extends Controller
{
    public function index()
    {
        return FotosEmpreendimento::all();
    }

    public function show($id)
    {
        $fotoEmpreendimento = FotosEmpreendimento::find($id);
        if(!empty($fotoEmpreendimento)) {
            return $fotoEmpreendimento;
        } else {
            return response(['message' => 'Foto do Empreendimento não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'empreendimento_id' => 'required|integer|exists:empreendimentos,id',
        ]);

        $fileNameToStore = '';

        if($request->hasFile('nome')) {
            $filenameWithExt = $request->file('nome')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('nome')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('nome')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['nome' => 'A imagem é obrigatória']);
        }

        $validatedData['nome'] = $fileNameToStore;

        return FotosEmpreendimento::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'empreendimento_id' => 'integer|empreendimentos,id',
        ]);

        $fotoEmpreendimento = FotosEmpreendimento::find($id);

        if(!empty($fotoEmpreendimento)) {
            $fotoEmpreendimento->fill($validatedData);
            $fotoEmpreendimento->save();
            return $fotoEmpreendimento;
        } else {
            return response(['message' => 'Foto do Empreendimento não encontrado']);
        }
    }

    public function destroy($id)
    {
        $fotoEmpreendimento = FotosEmpreendimento::find($id);

        if(!empty($fotoEmpreendimento)) {
            FotosEmpreendimento::find($id)->delete();
        } else {
            return response(['message' => 'Foto do Empreendimento não encontrado']);
        }
    }
}
