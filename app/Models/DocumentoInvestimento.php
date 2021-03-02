<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentoInvestimento extends Model
{
    use HasFactory;

    protected $fillable = ['selfie', 'imagem_documento', 'investimento_id'];

    protected $table = 'documentos_investimento';

    public function investimento()
    {
        return $this->belongsTo(\App\Models\Investimento::class, 'investimento_id', 'id');
    }
}
