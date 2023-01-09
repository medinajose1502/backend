<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anotador extends Model
{
    use HasFactory;
    //Especificar nombre de la tabla de BD.
    protected $table = 'anotador';

    public function calendario()
    {
        return $this->belongsTo(Calendario::class);
    }

    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
