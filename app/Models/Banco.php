<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\DadoBancario;

class Banco extends Model
{
    use HasFactory;

    protected $fillable = ['codigo_banco', 'nome_banco'];

    protected $table = 'bancos';

    public function dados_bancarios()
    {
        return $this->hasMany(DadoBancario::class);
    }
}
