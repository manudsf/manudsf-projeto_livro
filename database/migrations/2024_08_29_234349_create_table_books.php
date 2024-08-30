<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('table_books', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo', 255);
            $table->string('autor', 255);
            $table->unsignedBigInteger('genero_id');

            $table->foreign('genero_id')->references('id')->on('table_genero');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_books');
    }
};
