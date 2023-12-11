<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AProductos extends Model
{
    use HasFactory;
    protected $table = 'productos';

    protected $primaryKey = 'id_producto';

    protected $fillable = ['nombre','precio','cantidad','id_categoria','marca','id_proveedor', 'foto'];

    public function categoria(){
        return $this->belongsTo('App\Models\ACategoria','id_categoria','id_categoria');
    }
    public function proveedor(){
        return $this->belongsTo('App\Models\AProveedor','id_proveedor','id_proveedor');
    }
}
