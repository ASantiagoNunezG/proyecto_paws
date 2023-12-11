<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ACategoria extends Model
{
    use HasFactory;
    
    protected $table = 'categoria';

    protected $primaryKey = 'id_categoria';

    protected $fillable = ['nombre'];

    public function productos(){
        return $this->HasMany('App\Models\AProductos', 'id_categoria', 'id_categoria');
    }
}
