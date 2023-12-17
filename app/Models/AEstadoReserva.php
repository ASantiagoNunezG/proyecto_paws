<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AEstadoReserva extends Model
{
    use HasFactory;
    protected $table = 'estado_reserva';
    protected $primaryKey = 'id_estadoreserva';
    protected $fillable = ['nombre'];

    public function cita(){
        return $this->hasMany('App\Models\ACitaAdopcion','id_estadoreserva','id_estadoreserva');
    }
}
