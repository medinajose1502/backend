<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class TipoConfiguracion extends Model
{
    use HasFactory;
    use SoftDeletes;
    //Especificar nombre de la tabla de BD.
    protected $table = 'tipo_configuracion';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
    const DELETED_AT = 'eliminado';

    protected $fillable = [
        'nombre', 'descripcion'
    ];

    public function configuraciones()
    {
        return $this->hasMany(Configuracion::class);
    }
}
