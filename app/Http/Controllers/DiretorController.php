<?php

namespace App\Http\Controllers;

use App\Models\Diretor;

class DiretorController extends Controller
{
    public function index()
    {
        $diretores = Diretor::all();
        return view('diretores', compact('diretores'));
    }
}
