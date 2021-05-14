<?php

namespace App\Http\Controllers;

use App\Mail\Signature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Auth;


class AssinaturaController extends Controller
{
    public function criarSignatario()
    {
        $token = "a5195ae1-a66e-4563-b77e-2b434be1fab8";

        $email = Auth::user()->email;

        $signatarioData = [
            "signer" => [
                "email" => $email,
                "auths" => [
                    "email"
                ],
                "has_documentation" => true,
                "selfie_enabled" => true,
                "handwritten_enabled" => true,
                "official_document_enabled" => true
            ]
        ];

        $documentData = [
            "document" => [
                "path" => "/Modelos/Teste-123.docx",
                "template" => [
                    "data" => [
                        "Company Name" => "Clicksign Gestão de Documentos S.A.",
                        "Address" => "R. Teodoro Sampaio 2767, 10° andar",
                        "Phone" => "(11) 3145-2570",
                        "Website" => "https://www.clicksign.com"
                    ]
                ]
            ]
        ];

        $signatario = Http::post('https://sandbox.clicksign.com/api/v1/signers?access_token=' . $token, $signatarioData, []);
        $document = Http::post('https://sandbox.clicksign.com/api/v1/templates/b87be727-4fe2-4e59-a2bc-0f04bfed1f1f/documents?access_token=' . $token, $documentData, []);

        $signatarioDocumentData = [
            "list" => [
                "document_key" => $document['document']['key'],
                "signer_key" => $signatario['signer']['key'],
                "sign_as" => "sign",
                "message" => "Prezado " . Auth::user()->nome . " favor assine o documento. Qualquer dúvida estou à disposição. Atenciosamente, Equipe"
            ]
        ];

        $signatarioDocument = Http::post('https://sandbox.clicksign.com/api/v1/lists?access_token=' . $token, $signatarioDocumentData, []);

        return $signatarioDocument['list']['url'];
    }
}
