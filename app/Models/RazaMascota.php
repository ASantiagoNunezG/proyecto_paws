<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RazaMascota extends Model
{
    use HasFactory;

    protected $table = 'razas';

    protected $primaryKey = 'id_raza';

    protected $fillable = ['nombre' , 'foto'];

    // Definir la relación uno a muchos con Mascota
    public function mascota()
    {
        return $this->hasMany('App\Models\Mascota', 'id_raza' , 'id_raza');
    }
}