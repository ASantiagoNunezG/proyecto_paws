<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estadoreserva extends Model
{
    use HasFactory;

    protected $table = 'estado_reserva';
    protected $primaryKey = 'id_estadoreserva';
    protected $fillable = ['nombre'];

    // Definir la relación uno a muchos con Mascota
    public function mascota()
    {
        return $this->hasMany('App\Models\CitaAdopcion', 'id_estadoreserva' , 'id_estadoreserva');
    }
}
