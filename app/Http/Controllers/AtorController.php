<?php

namespace App\Http\Controllers;

use App\Models\Ator;

class AtorController extends Controller
{
    public function index()
    {
        $atores = Ator::all();
        return view('pages.atores', compact('atores'));
    }

    public function detalhes(Ator $ator)
    {
        return view('pages.details.detalhes-ator', compact('ator'));
    }
}
