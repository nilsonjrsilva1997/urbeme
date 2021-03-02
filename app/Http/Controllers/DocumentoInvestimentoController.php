<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoInvestimentoController extends Controller
{
    public function create(Request $request)
    {

        $validatedData = $request->validate([
            'investimento_id' => 'required|integer|exists:investimento,id|unique:documentos_investimento,investimento_id'
        ]);

        $fileNameToStore = '';

        if ($request->hasFile('selfie')) {
            $filenameWithExt = $request->file('selfie')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('selfie')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('selfie')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['selfie' => 'A selfie é obrigatória']);
        }

        $validatedData['selfie'] = $fileNameToStore;

        $fileNameToStore = '';

        if ($request->hasFile('imagem_documento')) {
            $filenameWithExt = $request->file('imagem_documento')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('imagem_documento')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('imagem_documento')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['imagem_documento' => 'A imagem do documento é obrigatória']);
        }

        $validatedData['imagem_documento'] = $fileNameToStore;

        return \App\Models\DocumentoInvestimento::create($validatedData);
    }
}
