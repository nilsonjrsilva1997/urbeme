<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class EstadoCivil extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    protected $table = 'estado_civis';

    public function usuario()
    {
        return $this->hasOne(User::class);
    }
}
