<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Instalacion extends Model
{
    use HasFactory;
    use SoftDeletes;
    //Especificar nombre de la tabla de BD.
    protected $table = 'instalacion';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
    const DELETED_AT = 'eliminado';

    protected $fillable = [
        'nombre', 'descripcion', 'imagen_principal'
    ];

    public function galeriaInstalacion()
    {
        return $this->hasMany(GaleriaInstalacion::class);
    }

    public function recursos()
    {
        return $this->hasMany(Recurso::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }
}
