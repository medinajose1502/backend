<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Calendario extends Model
{
    use HasFactory;
    use SoftDeletes;
    //Especificar nombre de la tabla de BD.
    protected $table = 'calendario';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
    const DELETED_AT = 'eliminado';

    protected $fillable = [
        'fecha'
    ];

    public function fasesModalidadTorneo()
    {
        return $this->belongsTo(FasesModalidadTorneo::class);
    }

    public function equipo_local()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function equipo_visitante()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function anotador()
    {
        return $this->hasMany(Anotador::class);
    }

    public function arbitro()
    {
        return $this->hasMany(Arbitro::class);
    }
}
