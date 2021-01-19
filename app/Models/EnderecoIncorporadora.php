<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoIncorporadora extends Model
{
    use HasFactory;

    protected $fillable = ['cep', 'rua', 'bairro', 'cidade', 'numero', 'estado', 'incorporadora_id'];

    protected $table = 'enderecos_incorporadora';
}
