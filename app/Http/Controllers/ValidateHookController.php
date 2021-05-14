<?php

namespace App\Http\Controllers;

use App\Models\DocumentUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\LogDocument;
use App\Models\Teste;
use Auth;

class ValidateHookController extends Controller
{
    public function validateHooks(Request $request)
    {
        $event_name =  $request->event['name'];

        switch ($event_name) {
            case 'upload':
                return 'Upload com sucesso';
            case 'sign':
                $document_user = DocumentUser::create([
                    'document_key' => $request->document['key'],
                    'user_id' => 1,
                    'status' => 'ASSINADO',
                    'investimento_id' => null,
                    'url' => 'https://google.com',
                ]);

                return [
                    'message' => 'Documento assinado: ' . $request->document['key'],
                    'data' => $document_user
                ];
            default:
                return 'Evento acionado' . $event_name;
        }
    }
}
