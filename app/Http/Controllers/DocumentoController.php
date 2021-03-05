<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
{
    public function index()
    {
        return Documento::where(['user_id' => \Auth::id()])->get();
    }

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

        $document = Documento::where(['user_id' => $validatedData['user_id']])
            ->where(['nome' => $validatedData['nome']])
            ->first();

        if ($document) {
            $document->fill($validatedData);
            $document->save();
        } else {
            $document = Documento::create($validatedData);
        }

        return $document;
    }

    public function update(Request $request, $id)
    {
        $request['user_id'] = \Auth::id();

        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'nome' => 'required|in:SELFIE,DOCUMENTO,COMPROVANTE_RESIDENCIA,DECLARACAO_RESIDENCIA',
        ]);

        $documento = Documento::find($id);

        if (!empty($documento)) {
            if ($documento->user_id !== \Auth::id()) {
                return response(['message' => 'Usuário não autorizado']);
            }

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

            $documento->fill($validatedData);
            $documento->save();
            return $documento;
        } else {
            return response(['message' => 'Documento não encontrado']);
        }
    }
}
