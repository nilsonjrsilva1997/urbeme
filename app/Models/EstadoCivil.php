<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class EstadoCivil extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'user_id'];

    protected $table = 'estado_civis';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
