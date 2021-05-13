<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\LogDocument;
use Auth;

class ValidateHookController extends Controller
{
    public function validateHooks(Request $request)
    {

        // $signatario = Http::post('https://0070dfcc2501.ngrok.io/api/clicksign/hooks/sign/', []);

        // return $signatario;

        // \App\Models\Teste::create(['name' => $request['event']['name']]);

        if($request['event']['name'] == 'sign') {
            LogDocument::create([
                'event' => 'sign',
                'user_id' => Auth::id(),
            ]);
        }

        /*
            $table->string('event');
            $table->integer('user_id');
            $table->integer('empreendimento_id');
            $table->string('document_key');
        */
    }
}
