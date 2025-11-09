<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Filme extends Model
{
    protected $with = ['diretor', 'produtora', 'nacionalidade'];

    public function diretor()
    {
        return $this->belongsTo(Diretor::class);
    }

    public function produtora()
    {
        return $this->belongsTo(Produtora::class);
    }

    public function nacionalidade()
    {
        return $this->belongsTo(Nacionalidade::class);
    }
}
