<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incorporadora extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo', 'live', 'site', 'informacoes'
    ];

    public function empreendimento()
    {
        return $this->hasMany( Empreendimento::class);
    }
}
