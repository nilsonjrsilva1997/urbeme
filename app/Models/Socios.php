<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incorporadora;

class Socios extends Model
{
    use HasFactory;
    protected $table = 'socios';
    protected $fillable = ['nome', 'cpf', 'email', 'celular', 'data', 'incorporadora_id', ];

    public function incorporadora()
    {
        return $this->belongsTo(Incorporadora::class, 'incorporadora_id', 'id');
    }
}
