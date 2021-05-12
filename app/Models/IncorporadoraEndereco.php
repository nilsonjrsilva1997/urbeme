<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incorporadora;

class IncorporadoraEndereco extends Model
{
    use HasFactory;
    protected $table = 'incorporadora_enderecos';
    protected $fillable = ['cep', 'bairro', 'numero', 'rua', 'cidade', 'estado', 'incorporadora_id', ];

    public function incorporadora()
    {
        return $this->belongsTo(Incorporadora::class, 'incorporadora_id', 'id');
    }
}
