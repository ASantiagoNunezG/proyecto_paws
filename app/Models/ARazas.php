<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ARazas extends Model
{
    use HasFactory;

    protected $table = 'razas';

    protected $primaryKey = 'id_raza';

    protected $fillable = ['nombre'];

    public function mascota(){
        return $this->hasMany('App\Models\AMascota', 'id_raza', 'id_raza');
    }
    public function tipo()
    {
        return $this->belongsTo(ATipoMascota::class, 'id_tipo_mascota');
    }
}
