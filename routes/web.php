<?php

use Illuminate\Support\Facades\Route;
use App\Models\Filme;
use App\Models\Genero;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function() {
    $filmes = Filme::all();
    return view('lista-filmes', compact('filmes'));
});

Route::get('/detalhes-filme/{filme}',
    function(Filme $filme) {
        return view('detalhes-filme', compact('filme'));
});