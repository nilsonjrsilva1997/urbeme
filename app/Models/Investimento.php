<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investimento extends Model
{
    use HasFactory;

    protected $fillable = ['valor', 'codigo_indicacao', 'user_id'];

    protected $table = 'investimento';

    public function usuario()
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id', 'id');
    }
}
