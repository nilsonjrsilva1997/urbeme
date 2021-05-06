<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incorporadora;

class DadosIncorporadora extends Model
{
    use HasFactory;
    protected $table = 'dados_incorporadoras';
    protected $fillable = ['url_live', 'url_site', 'cpf', 'incorporadora_id'];

    public function incorporadora()
    {
        return $this->belongsTo(Incorporadora::class, 'incorporadora_id', 'id');
    }
}
