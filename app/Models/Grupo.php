<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    use SoftDeletes;
    //Especificar nombre de la tabla de BD.
    protected $table = 'grupo';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
    const DELETED_AT = 'eliminado';

    protected $fillable = [
        'nombre', 'descripcion'
    ];

    public function grupoFuncion()
    {
        return $this->hasMany(GrupoFuncion::class);
    }
}
