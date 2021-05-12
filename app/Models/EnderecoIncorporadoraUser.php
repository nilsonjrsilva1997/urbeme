<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoIncorporadoraUser extends Model
{
    use HasFactory;
    protected $table = 'endereco_incorporadora_users';
    protected $fillable = ['cep', 'rua', 'bairro', 'cidade', 'numero', 'estado', ];
}
