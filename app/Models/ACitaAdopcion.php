<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ACitaAdopcion extends Model
{
    use HasFactory;

    protected $table = 'citas_adopcion';
    protected $primaryKey = 'id_citamascota';
    protected $fillable = ['fecha','hora','id_usuario','id_mascota','id_estadoreserva'];

    public function reserva(){
        return $this->belongsTo('App\Models\AEstadoReserva','id_estadoreserva','id_estadoreserva');
    }
    public function usuario(){
        return $this->belongsTo('App\Models\AUsuario','id_usuario','id_usuario');
    }
    public function mascota(){
        return $this->belongsTo('App\Models\AMascota', 'id_mascota','id_mascota');
    }
}
