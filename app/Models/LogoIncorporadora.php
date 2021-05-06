<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Incorporadora;

class LogoIncorporadora extends Model
{
    use HasFactory;
    protected $table = 'logo_incorporadoras';
    protected $fillable = ['logo', 'incorporadora_id'];

    public function incorporadora()
    {
        return $this->belongsTo(Incorporadora::class, 'incorporadora_id', 'id');
    }
}
