<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DadoBancario extends Model
{
    use HasFactory;

    protected $fillable = ['agencia', 'conta'];

    protected $table = 'dados_bancarios';
}
