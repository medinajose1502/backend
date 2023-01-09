<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    use SoftDeletes;
    //Especificar nombre de la tabla de BD.
    protected $table = 'persona';

    //Cambiar nombre de las columnas creado y actualizado en la tabla de BD.
    const CREATED_AT = 'creado';
    const UPDATED_AT = 'actualizado';
    const DELETED_AT = 'eliminado';

    protected $fillable = [
        'identificacion', 'nombres', 'apellidos', 'fecha_nacimiento', 'sexo', 'foto', 'correo'
    ];

    public function arbitro()
    {
        return $this->hasMany(Arbitro::class);
    }

    public function anotador()
    {
        return $this->hasMany(Anotador::class);
    }

    public function jugador()
    {
        return $this->hasOne(Jugador::class);
    }

    public function directivo()
    {
        return $this->hasMany(Directivo::class);
    }

    public function telefono()
    {
        return $this->hasMany(Telefono::class);
    }
}
