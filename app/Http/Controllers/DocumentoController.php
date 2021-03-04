<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
{
    public function create(Request $request)
    {
        $request['user_id'] = \Auth::id();

        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'nome' => 'required|in:SELFIE,DOCUMENTO,COMPROVANTE_RESIDENCIA,DECLARACAO_RESIDENCIA',
        ]);

        $fileNameToStore = '';

        if ($request->hasFile('arquivo')) {
            $filenameWithExt = $request->file('arquivo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('arquivo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('arquivo')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['arquivo' => 'O arquivo é obrigatória']);
        }

        $validatedData['arquivo'] = $fileNameToStore;

        return Documento::create($validatedData);
    }
}
