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

        $request->validate([
            'investimento_id' => 'required|integer|exists:investimento,id'
        ]);

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

        DocumentUser::create([
            'document_key' => $document['document']['key'],
            'user_id' => Auth::id(),
            'investimento_id' => $request->investimento_id,
            'status' => 'ANALISE',
            'url' => ''
        ]);

        return $document;
    }
}
