<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teste extends Model
{
    use HasFactory;
    protected $table = 'testes';
    protected $fillable = ['nome', ];
}
