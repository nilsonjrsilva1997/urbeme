<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Incorporadora extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'incorporadoras';
    protected $fillable = ['cnpj', 'razao_social', 'nome_fantasia', 'email', 'celular', 'senha', ];
}
