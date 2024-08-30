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
        Schema::create('table_leitura', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('book_id');
            $table->unsignedBigInteger('status_id');
            $table->date('lido_em')->nullable();
        
    $table->foreign('user_id')->references('id')->on('table_users');
    $table->foreign('book_id')->references('id')->on('table_books');
    $table->foreign('status_id')->references('id')->on('table_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_leitura');
    }
};
