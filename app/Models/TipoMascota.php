<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMascota extends Model
{
    use HasFactory;

    protected $table = 'tipo_mascota';

    protected $primaryKey = 'id_tipomascota';

    protected $fillable = ['nombre' , 'foto'];

    // Definir la relación uno a muchos con Mascota
    public function mascota()
    {
        return $this->hasMany('App\Models\Mascota', 'id_tipomascota' , 'id_tipomascota');
    }
}