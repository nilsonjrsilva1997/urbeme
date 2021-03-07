<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TesteSchedule extends Model
{
    use HasFactory;

    protected $fillable = ['nome'];

    protected $table = 'teste_schedule';
}
