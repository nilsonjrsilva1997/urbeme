<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DocumentUser extends Model
{
    use HasFactory;

    protected $fillable = ['document_key', 'user_id', 'status', 'investimento_id', 'url'];

    protected $table = 'document_users';
}
