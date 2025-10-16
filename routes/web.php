<?php

use Illuminate\Support\Facades\Route;
use App\Models\Filme;
use App\Models\Genero;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'sobre');


Route::get('/lista-filmes', function() {
    $filmes = Filme::all();
    return view('lista-filmes', compact('filmes'));
});