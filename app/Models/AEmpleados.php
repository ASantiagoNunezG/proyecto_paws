<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AEmpleados extends Model
{
    use HasFactory;

    protected $table = 'empleado';
    protected $primaryKey = 'id_empleado';
    protected $fillable = ['nombre', 'apellido', 'dni', 'direccion', 'celular', 'correo', 'id_puesto', 'foto'];
    public function puesto(){
        return $this->belongsTo('App\Models\APuesto', 'id_puesto', 'id_puesto');
    }
}
