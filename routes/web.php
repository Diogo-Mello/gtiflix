<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\DiretorController;
use App\Http\Controllers\AtorController;

Route::redirect('/', '/login');

Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
    Route::post('/logar', [LoginController::class, 'logar'])->name('logar');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/lista-filmes', [FilmeController::class, 'index'])->name('lista-filmes');
    Route::get('/detalhes-filme/{filme}', [FilmeController::class, 'detalhes'])->name('detalhes-filme');

    Route::get('/diretores', [DiretorController::class, 'index'])->name('diretores');

    Route::get('/atores', [AtorController::class, 'index'])->name('atores');
});
