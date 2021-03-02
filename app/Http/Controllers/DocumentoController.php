<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Documento;

class DocumentoController extends Controller
{
    public function index()
    {
        return Documento::all();
    }

    public function show($id)
    {
        $documento = Documento::find($id);
        if (!empty($documento)) {
            return $documento;
        } else {
            return response(['message' => 'Documento não encontrado']);
        }
    }

    public function create(Request $request)
    {
        $request['user_id'] = \Auth::id();

        $validatedData = $request->validate([
            'user_id' => 'required|integer|exists:users,id|unique:documentos,user_id'
        ]);

        $fileNameToStore = '';

        if ($request->hasFile('comprovante_residencia')) {
            $filenameWithExt = $request->file('comprovante_residencia')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('comprovante_residencia')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('comprovante_residencia')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['comprovante_residencia' => 'O comprovante de residencia é obrigatória']);
        }

        $validatedData['comprovante_residencia'] = $fileNameToStore;

        $fileNameToStore = '';

        if ($request->hasFile('declaracao_residencia')) {
            $filenameWithExt = $request->file('declaracao_residencia')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('declaracao_residencia')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('declaracao_residencia')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['declaracao_residencia' => 'A declaração de residencia é obrigatória']);
        }

        $validatedData['declaracao_residencia'] = $fileNameToStore;


        return Documento::create($validatedData);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'empreendimento_id' => 'integer|empreendimentos,id',
        ]);

        $documento = Documento::find($id);

        if (!empty($documento)) {
            $documento->fill($validatedData);
            $documento->save();
            return $documento;
        } else {
            return response(['message' => 'Documento não encontrado']);
        }
    }

    public function destroy($id)
    {
        $documento = Documento::find($id);

        if (!empty($documento)) {
            Documento::find($id)->delete();
        } else {
            return response(['message' => 'Documento não encontrado']);
        }
    }
}
