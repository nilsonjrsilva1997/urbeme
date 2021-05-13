<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogDocument extends Model
{
    use HasFactory;

    protected $fillable = ['event', 'user_id', 'empreendimento_id', 'document_key'];

    protected $table = 'log_documents';
}