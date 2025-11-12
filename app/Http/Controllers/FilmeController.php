<?php

namespace App\Http\Controllers;

use App\Models\Filme;
use Illuminate\Http\Request;

class FilmeController extends Controller
{
    public function index()
    {
        $filmes = Filme::all();
        return view('pages.filmes', compact('filmes'));
    }

    public function detalhes(Filme $filme)
    {
        return view('pages.details.detalhes-filme', compact('filme'));
    }
}
