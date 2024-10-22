<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneroTable extends Migration
{
    public function up()
    {
        Schema::create('genero', function (Blueprint $table) {
            $table->id(); // Cria uma coluna 'id' auto-incremento
            $table->string('nome'); // Cria uma coluna 'nome'
            $table->timestamps(); // Cria as colunas 'created_at' e 'updated_at'
        });
    }

    public function down()
    {
        Schema::dropIfExists('genero');
    }
}
