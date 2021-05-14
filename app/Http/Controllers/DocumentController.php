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
                "path" => "/Modelos/Teste-123.docx",
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

        $document = Http::post('https://sandbox.clicksign.com/api/v1/templates/'
            . env('TEMPLATE_KEY_CLICK_SIGN')
            . '/documents?access_token='
            . env('TOKEN_CLICK_SING'), $documentData, []);

        $document_json = $document->json();

        $sign_data = [
            "list" => [
                "document_key" => $document_json['document']['key'],
                "signer_key" => $user->signer_id,
                "sign_as" => "sign",
                "group" => 1,
                "message" => 'assinatura',
            ]
        ];

        return $document_json;

        $sign = Http::post('https://sandbox.clicksign.com/api/v1/lists?access_token=' . env('TOKEN_CLICK_SING'), $sign_data, []);

        $sign_json = $sign->json();

        return $sign_json;

        DocumentUser::create([
            'document_key' => $document_json['document']['key'],
            'user_id' => Auth::id(),
            'empreendimento_id' => $request->empreendimento_id,
            'status' => 'ANALISE',
            'url' => $sign_json['list']['url'],
        ]);

        return $document;
    }
}
