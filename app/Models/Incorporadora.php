<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Models\DadosIncorporadora;
use App\Models\LogoIncorporadora;

class Incorporadora extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'incorporadoras';

    protected $fillable = ['cnpj', 'razao_social', 'nome_fantasia', 'email', 'celular', 'password'];

    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dados_incorporadora()
    {
        return $this->hasOne(DadosIncorporadora::class);
    }

    public function logo()
    {
        return $this->hasOne(LogoIncorporadora::class);
    }
}
