<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use App\Models\DadoBancario;
use App\Models\EstadoCivil;
use App\Models\Endereco;
use App\Models\Documento;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'sobre_nome',
        'email',
        'data_nascimento',
        'estado_civil_id',
        'cpf',
        'rg',
        'profissao',
        'empresa',
        'celular',
        'telefone',
        'sexo',
        'password',
        'foto',
        'aparecer_lista',
        'pessoa_publicamente_exposta',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function dados_bancarios()
    {
        return $this->hasMany(DadoBancario::class);
    }

    public function estado_civil()
    {
        return $this->belongsTo(EstadoCivil::class, 'estado_civil_id', 'id');
    }

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }

    public function documento()
    {
        return $this->hasMany(Documento::class);
    }
}