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
        $userId = Auth::id();

        $documentUser = DocumentUser::where('user_id', $userId)
            ->where('document_key', $request->key)
            ->where('empreendimento_id', $request->empreendimento_id)
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

        $signatarioDocument = Http::post('https://sandbox.clicksign.com/api/v1/lists?access_token=a5195ae1-a66e-4563-b77e-2b434be1fab8', $signatarioDocumentData, []);

        $documentUser = DocumentUser::where(['user_id' => $user->id])
            ->where(['document_key' => $request->document_key])
            ->first();

        $documentUser->url = $signatarioDocument['list']['url'];

        $documentUser->save();

        return $documentUser;
    }
}
