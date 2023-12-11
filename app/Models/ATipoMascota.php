<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ATipoMascota extends Model
{
    use HasFactory;

    protected $table = 'tipo_mascota';

    protected $primaryKey = 'id_tipomascota';

    protected $fillable = ['nombre'];

    public function mascota(){
        return $this->hasMany('App\Models\AMascota','id_tipomascota','id_tipomascota');
    }
    public function razas()
    {
        return $this->hasMany(ARazas::class, 'id_tipo_mascota');
    }
}
