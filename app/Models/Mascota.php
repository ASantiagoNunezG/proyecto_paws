<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    use HasFactory;

    protected $table = 'mascota';
    protected $primaryKey = 'id_mascota';
    protected $fillable = ['nombre','tamano', 'edad', 'sexo', 'descripcion', 'id_tipomascota', 'id_usuario', 'id_estadomascota', 'id_raza', 'foto'];

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo('App\Models\User', 'id_usuario' , 'id_usuario');
    }

    public function estadoMascota()
    {
        return $this->belongsTo('App\Models\EstadoMascota', 'id_estadomascota' , 'id_estadomascota');
    }

    public function tipoMascota()
    {
        return $this->belongsTo('App\Models\TipoMascota', 'id_tipomascota' , 'id_tipomascota');
    }

    public function raza()
    {
        return $this->belongsTo('App\Models\RazaMascota', 'id_raza' , 'id_raza');
    }
}
