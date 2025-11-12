<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produtora extends Model
{
    public function nacionalidade()
    {
        return $this->belongsTo(Nacionalidade::class);
    }
}
