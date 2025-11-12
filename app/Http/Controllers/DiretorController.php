<?php

namespace App\Http\Controllers;

use App\Models\Diretor;

class DiretorController extends Controller
{
    public function index()
    {
        $diretores = Diretor::all();
        return view('pages.diretores', compact('diretores'));
    }

    public function detalhes(Diretor $diretor)
    {
        return view('pages.details.detalhes-diretor', compact('diretor'));
    }
}
