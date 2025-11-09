<?php

namespace App\Http\Controllers;

use App\Models\Ator;

class AtorController extends Controller
{
    public function index()
    {
        $atores = Ator::all();
        return view('atores', compact('atores'));
    }
}
