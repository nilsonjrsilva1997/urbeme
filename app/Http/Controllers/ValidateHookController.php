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


        // $signatario = Http::post('https://0070dfcc2501.ngrok.io/api/clicksign/hooks/sign/', []);

        // return $signatario;

        // \App\Models\Teste::create(['name' => $request['event']['name']]);

        \App\Models\Teste::create(['nome' => $request['event']['name']]);
        \App\Models\Teste::create(['nome' => $request['document']['key']]);

        if ($request->event->name == 'sign') {
            $docKey = $request['document']['key'];


            $documentUser = DocumentUser::where(['document_key' => $docKey])
                ->first();

            \App\Models\Teste::create(['nome' => $documentUser->id]);

            $documentUser->status = 'ASSINADO';
            return $documentUser->save();
        }

        return 'true';


        // $signatarioDocumentData = [
        //     "list" => [
        //         "document_key" => $document['document']['key'],
        //         "signer_key" => $signatario['signer']['key'],
        //         "sign_as" => "sign",
        //         "message" => "Prezado " . Auth::user()->nome . " favor assine o documento. Qualquer dúvida estou à disposição. Atenciosamente, Equipe"
        //     ]
        // ];

        // $signatarioDocument = Http::post('https://sandbox.clicksign.com/api/v1/lists?access_token=' . env('TOKEN_CLICK_SING'), $signatarioDocumentData, []);

        /*
            $table->string('event');
            $table->integer('user_id');
            $table->integer('empreendimento_id');
            $table->string('document_key');
        */
    }
}
