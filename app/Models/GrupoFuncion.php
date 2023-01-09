<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoFuncion extends Model
{
    use HasFactory;
    protected $table = 'grupo_funcion';

    public function funcion()
    {
        return $this->belongsTo(Funcion::class);
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
}
