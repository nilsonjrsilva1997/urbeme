<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Paises;
use App\Models\User;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = ['cep', 'pais_id', 'user_id', 'estado', 'cidade', 'rua', 'numero', 'complemento'];

    protected $table = 'enderecos';

    public function pais()
    {
        return $this->belongsTo(Paises::class, 'pais_id', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
