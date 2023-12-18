<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;
    
    protected $table = 'categoria';

    protected $primaryKey = 'id_categoria';
    
    protected $fillable =['nombre', 'foto'];

    public function productos(){
        return $this->hasMany('App\Models\Productos','id_categoria','id_categoria');
    }
}
