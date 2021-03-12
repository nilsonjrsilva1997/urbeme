<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsuarioController extends Controller
{
    public function index()
    {
        return \Auth::user();
    }

    public function salvarDadosPessoais(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'sobre_nome' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
            'estado_civil_id' => 'required|integer|exists:estado_civis,id',
            'cpf' => 'required|cpf',
            'rg' => 'required|string|max:20',
            'profissao' => 'required|string|max:255',
            'empresa' => 'required|string|max:255',
            'celular' => ['required', 'regex:/(\(\d{2}\)\s)(\d{4,5}\-\d{4})/'],
            'telefone' => ['required', 'regex:/(\(\d{2}\)\s)(\d{4,5}\-\d{4})/'],
            'sexo' => 'required|in:MASCULINO,FEMININO,OUTRO',
            'aparecer_lista' => 'required|boolean',
            'pessoa_publicamente_exposta' => 'required|boolean',
            'pais_nascimento_id' => 'required|integer',
            'cidade_nascimento' => 'required|string|max:255',
            'estado_nascimento' => 'required|string|max:255',
            'patrimonio_total' => 'required|numeric',
            'renda_mensal' => 'required|numeric',
        ]);

        $user = \Auth::user();
        $user->fill($validatedData);
        $user->save();
        return $user;
    }

    public function uploadFoto(Request $request)
    {
        $user = \Auth::user();

        if ($user['foto'] != null) {
            return response(['message' => 'Usuário já possui foto, atualize para mudar'], 422);
        }

        $fileNameToStore = '';

        if ($request->hasFile('foto')) {
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('foto')->storeAs('public/images', $fileNameToStore);
        } else {
            return response(['foto' => 'A foto é obrigatória']);
        }


        $user['foto'] = $fileNameToStore;
        $user->save();
        return $user;
    }

    public function uploadFotoUpdate(Request $request)
    {
        $user = \Auth::user();

        if (!empty($user)) {
            if ($request->hasFile('foto')) {
                unlink(storage_path('app/public/images/' . $user->foto));
            }

            $fileNameToStore = '';
            $filenameWithExt = $request->file('foto')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('foto')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('foto')->storeAs('public/images', $fileNameToStore);

            $validatedData['foto'] = $fileNameToStore;

            $user->fill($validatedData);
            $user->save();

            return $user;
        } else {
            return response(['message' => 'Usuário não encontrado']);
        }
    }

    public function meusInvestimentos()
    {
        return \Auth::user()->with('investimento')->with('investimento.empreendimento')->get()[0]['investimento'];
    }
}
