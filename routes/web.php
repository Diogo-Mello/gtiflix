<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use App\Models\Filme;
use App\Models\Genero;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/login', 'login')->name('login');

Route::post('logar', function(Request $request) {

    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        $filmes = Filme::all();
        return view('lista-filmes', compact('filmes'));
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');

})->name('logar');

Route::get('/', function() {
    $filmes = Filme::all();
    return view('lista-filmes', compact('filmes'));
});

Route::get('/detalhes-filme/{filme}',
    function(Filme $filme) {
        return view('detalhes-filme', compact('filme'));
})->name('detalhes-filme');