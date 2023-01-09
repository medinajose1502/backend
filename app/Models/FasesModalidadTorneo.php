<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class FasesModalidadTorneo extends Model
{
    use HasFactory;
    use SoftDeletes;
    //Especificar nombre de la tabla de BD.
    protected $table = 'fases_modalidad_torneo';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
    const DELETED_AT = 'eliminado';

    public function fase()
    {
        return $this->hasMany(Fase::class);
    }
    public function modalidad()
    {
        return $this->hasMany(Modalidad::class);
    }
    public function torneo()
    {
        return $this->hasMany(Torneo::class);
    }
    public function equipo()
    {
        return $this->hasMany(Equipo::class);
    }
}
