<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Documento extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'arquivo', 'user_id'];

    protected $table = 'documentos';

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
