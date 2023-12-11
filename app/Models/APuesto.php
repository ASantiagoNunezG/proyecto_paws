<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class APuesto extends Model
{
    use HasFactory;

    protected $table = 'puesto';
    protected $primaryKey = 'id_puesto';
    protected $fillable = ['nombre', 'foto'];
    public function empleado(){
        return $this->hasMany('App\Models\AEmpleados', 'id_puesto', 'id_puesto');
    }
}
