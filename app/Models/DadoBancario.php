<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Banco;
use App\Models\User;

class DadoBancario extends Model
{
    use HasFactory;

    protected $fillable = ['agencia', 'conta', 'banco_id', 'user_id'];

    protected $table = 'dados_bancarios';

    public function banco()
    {
        return $this->belongsTo(Banco::class, 'banco_id', 'id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
