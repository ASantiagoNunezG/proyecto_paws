<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AMascota extends Model
{
    use HasFactory;

    protected $table = 'mascota';

    protected $primaryKey = 'id_mascota';

    protected $fillable = ['nombre','tamano', 'edad', 'sexo','tipo','id_usuario','id_estadomascota','id_raza', 'foto', 'id_tipomascota'];

    public function usuario(){
        return $this->belongsTo('App\Models\AUsuario','id_usuario','id_usuario');
    }

    public function estado(){
        return $this->belongsTo('App\Models\AEstadoMascota','id_estadomascota','id_estadomascota');
    }
    public function tipo(){
        return $this->belongsTo('App\Models\ATipoMascota','id_tipomascota','id_tipomascota');
    }
    public function raza(){
        return $this->belongsTo('App\Models\ARazas','id_raza','id_raza');
    }

}
