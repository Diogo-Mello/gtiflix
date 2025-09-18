<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'sobre');

Route::get('/diogo', function() {
    echo 'Oi Diogo, lindão :)';
});

Route::get('/filmes/{filme}', function($filme) {
    echo 'Oi Diogo, ve esse filme aqui bb :) <br> '.$filme.' gostou?';
    echo '<script>alert("oi bb")</script>';
});