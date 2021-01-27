<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FotosEmpreendimento extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'empreendimento_id'];

    protected $table = 'fotos_empreendimento';
}
