<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Endereco;

class Paises extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name'];

    protected $table = 'paises';

    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
}
