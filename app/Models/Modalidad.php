<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modalidad extends Model
{
    use HasFactory;
    use SoftDeletes;
    //Especificar nombre de la tabla de BD.
    protected $table = 'modalidad';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
    const DELETED_AT = 'eliminado';

    protected $fillable = [
        'nombre', 'descripcion', 'vueltas', 'tiempo_maximo_minutos', 'tiempo_forfeit_minutos', 'puntuacion_minima', 'puntuacion_maxima'
    ];

    public function fasesModalidadTorneo()
    {
        return $this->hasMany(FasesModalidadTorneo::class);
    }
}
