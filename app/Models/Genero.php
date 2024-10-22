<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'genero'; // Nome correto da tabela
    protected $fillable = ['nome']; // Certifique-se de usar um array
}
