<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LeituraController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\StatusController;

Route::resource('genero', GeneroController::class);

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/genero', [GeneroController::class, 'index'])->name('genero.index');

Route::get('/livro', [GeneroController::class, 'index'])->name('livro.index');

Route::get('/leituras', [GeneroController::class, 'index'])->name('leituras.index');

Route::get('/status', [GeneroController::class, 'index'])->name('status.index');

