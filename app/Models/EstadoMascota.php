<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoMascota extends Model
{
    use HasFactory;

    protected $table = 'estado_mascota';
    protected $primaryKey = 'id_estadomascota';
    protected $fillable = ['nombre'];

    // Definir la relación uno a muchos con Mascota
    public function mascota()
    {
        return $this->hasMany('App\Models\Mascota', 'id_estadomascota' , 'id_estadomascota');
    }
}