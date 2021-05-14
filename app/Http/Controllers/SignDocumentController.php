<?php

namespace App\Http\Controllers;

use App\Models\DocumentUser;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Http;

class SignDocumentController extends Controller
{
    public function checkSign(Request $request)
    {
        // ['document_key', 'user_id', 'status', 'investimento_id'];
        $userId = Auth::id();

        // $request->validate([
        //     'investimento_id' => 'required|integer|exists:investimento,id'
        // ]);

        // $documentUser = DocumentUser::where(['user_id' => $userId])->where(['investimento_id' => $request->investimento_id])->first();

        // if(empty($documentUser)) {
        //     return response(['message' => 'Documento ou usuário não encontrados'], 422);
        // }

        $documentUser = DocumentUser::where(['user_id' => $userId])
            ->where(['investimento_id' => $request->investimento_id])
            ->first();

        return $documentUser;
    }

    public function associar(Request $request)
    {
        $user = Auth::user();

        $signatarioDocumentData = [
            "list" => [
                "document_key" => $request->document_key,
                "signer_key" => $user->signer_id,
                "sign_as" => "sign",
                "message" => "Prezado " . Auth::user()->nome . " favor assine o documento. Qualquer dúvida estou à disposição. Atenciosamente, Equipe"
            ]
        ];

        $signatarioDocument = Http::post('https://sandbox.clicksign.com/api/v1/lists?access_token=' . env('TOKEN_CLICK_SING'), $signatarioDocumentData, []);

        $documentUser = DocumentUser::where(['user_id' => $user->id])
            ->where(['investimento_id' => $request->investimento_id])
            ->first();

        $documentUser->url = $signatarioDocument['list']['url'];

        $documentUser->save();
    }
}
