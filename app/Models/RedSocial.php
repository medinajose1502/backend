<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class RedSocial extends Model
{
    use HasFactory;
    use SoftDeletes;
    //Especificar nombre de la tabla de BD.
    protected $table = 'red_social';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
    const DELETED_AT = 'eliminado';

    protected $fillable = [
        'nombre', 'icono', 'url'
    ];
}
