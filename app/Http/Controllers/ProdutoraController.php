<?php

namespace App\Http\Controllers;

use App\Models\Produtora;

class ProdutoraController extends Controller
{
    public function index()
    {
        $produtoras = Produtora::all();
        return view('pages.produtoras', compact('produtoras'));
    }

    public function detalhes(produtora $produtora)
    {
        return view('pages.details.detalhes-produtora', compact('produtora'));
    }
}
