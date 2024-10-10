<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leitura extends Model
{
    protected $table = 'leituras';
    protected $fillable = ['user_id', 'book_id', 'status_id', 'avaliacao', 'lido_em'];
}
