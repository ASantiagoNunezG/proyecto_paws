<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AProveedor extends Model
{
    use HasFactory;
    
    protected $table = 'proveedor';

    protected $primaryKey = 'id_proveedor';
    
    protected $fillable =['nombre','ruc','telefono'];

    public function productos(){
        return $this->hasMany('App\Models\AProductos','id_proveedor','id_proveedor');
    }
}
