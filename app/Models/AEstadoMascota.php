<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AEstadoMascota extends Model
{
    use HasFactory;
    protected $table = 'estado_mascota';

    protected $primaryKey = 'id_estadomascota';

    protected $fillable = ['nombre'];

    public function mascota(){
        return $this->hasMany('App\Models\AMascota','id_estadomascota','id_estadomascota');
    }
}
