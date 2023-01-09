<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;
    use SoftDeletes;
    //Especificar nombre de la tabla de BD.
    protected $table = 'equipo';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
    const DELETED_AT = 'eliminado';

    protected $fillable = [
        'nombre', 'abreviatura', 'logo', 'firma'
    ];

    public function comentarios()
    {
        return $this->hasMany(Jugador::class);
    }

    public function calendario()
    {
        return $this->hasMany(Calendario::class);
    }

    public function fasesModalidadTorneo()
    {
        return $this->hasMany(FasesModalidadTorneo::class);
    }
}
