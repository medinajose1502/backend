<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filosofia extends Model
{
    use HasFactory;
    //Especificar nombre de la tabla de BD.
    protected $table = 'evento';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';

    protected $fillable = [
        'mision', 'vision'
    ];
}
