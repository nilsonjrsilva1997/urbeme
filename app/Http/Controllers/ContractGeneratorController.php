<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContractGeneratorController extends Controller
{
    public function generateContract()
    {
        $var = 'Testando parametro';
        return \PDF::loadView('site.certificate.certificate', compact('var'))->download('nome-arquivo-pdf-gerado.pdf');
        // $content = $pdf->download()->getOriginalContent();
    }
}
