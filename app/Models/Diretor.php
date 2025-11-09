<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diretor extends Model
{
    protected $table = 'diretores';

    public function nacionalidade()
    {
        return $this->belongsTo(Nacionalidade::class);
    }
}
