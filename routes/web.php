<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FilmeController;
use App\Http\Controllers\DiretorController;
use App\Http\Controllers\AtorController;
use App\Http\Controllers\ProdutoraController;
use App\Illuminate\Http\Request;

Route::middleware('guest')->group(function () {
    Route::redirect('/', '/login');

    Route::get('/login', [LoginController::class, 'showLogin'])->name('login');

    Route::post('/logar', [LoginController::class, 'logar'])->name('logar');
});

Route::middleware('auth')->group(function () {
    Route::redirect('/', '/filmes');

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/filmes', [FilmeController::class, 'index'])->name('filmes');
    Route::get('/diretores', [DiretorController::class, 'index'])->name('diretores');
    Route::get('/atores', [AtorController::class, 'index'])->name('atores');
    Route::get('/produtoras', [ProdutoraController::class, 'index'])->name('produtoras');

    Route::get('/detalhes-filme/{filme}', [FilmeController::class, 'detalhes'])->name('detalhes-filme')->missing(function ($request) {
        return redirect()->route('filmes');
    });
    Route::get('/detalhes-diretor/{diretor}', [DiretorController::class, 'detalhes'])->name('detalhes-diretor')->missing(function ($request) {
        return redirect()->route('diretores');
    });
    Route::get('/detalhes-ator/{ator}', [AtorController::class, 'detalhes'])->name('detalhes-ator')->missing(function ($request) {
        return redirect()->route('atores');
    });
    Route::get('/detalhes-produtora/{produtora}', [ProdutoraController::class, 'detalhes'])->name('detalhes-produtora')->missing(function ($request) {
        return redirect()->route('produtoras');
    });
});
