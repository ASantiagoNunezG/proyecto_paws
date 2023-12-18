<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CitaAdopcion extends Model
{
    use HasFactory;

    protected $table = 'citas_adopcion';
    protected $primaryKey = 'id_citamascota';
    protected $fillable = ['fecha','hora', 'id_usuario', 'id_mascota', 'id_estadoreserva'];

    // Relaciones
    public function usuario()
    {
        return $this->belongsTo('App\Models\User', 'id_usuario' , 'id_usuario');
    }

    public function Mascota()
    {
        return $this->belongsTo('App\Models\Mascota', 'id_mascota' , 'id_mascota');
    }

    public function EstadoReserva()
    {
        return $this->belongsTo('App\Models\Estadoreserva', 'id_estadoreserva' , 'id_estadoreserva');
    }
}
