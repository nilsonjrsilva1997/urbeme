<?php

namespace App\Http\Controllers;

use App\Models\DocumentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;

class DocumentController extends Controller
{
    public function create(Request $request)
    {
        $user = Auth::user();

        $documentData = [
            "document" => [
                "path" => '/Modelos/Teste-123.docx',
                "template" => [
                    "data" => [
                        "nome_investidor" => $user->nome,
                        "Address" => "R. Teodoro Sampaio 2767, 10° andar",
                        "Phone" => "(11) 3145-2570",
                        "Website" => "https://www.clicksign.com"
                    ]
                ]
            ]
        ];

        $document = Http::post('https://sandbox.clicksign.com/api/v1/templates/2605c9ad-d972-4970-8a99-4a485428244b/documents?access_token=a5195ae1-a66e-4563-b77e-2b434be1fab8', $documentData, []);

        $document_json = $document->json();

        $sign_data = [
            "list" => [
                "document_key" => $document_json['document']['key'],
                "signer_key" => $user->signer_id,
                "sign_as" => "sign",
                "message" => 'assinatura',
            ]
        ];

        $sign = Http::post('https://sandbox.clicksign.com/api/v1/lists?access_token=a5195ae1-a66e-4563-b77e-2b434be1fab8', $sign_data, []);

        $sign_json = $sign->json();

        $appDoc = DocumentUser::create([
            'document_key' => $document_json['document']['key'],
            'user_id' => Auth::id(),
            'empreendimento_id' => $request->empreendimento_id,
            'status' => 'ANALISE',
            'url' => $sign_json['list']['url'],
        ]);

        $data = [
            'doc' => $appDoc,
            'sign' => $sign_json,
            'document' => $document_json,
        ];

        return $data;
    }
}
