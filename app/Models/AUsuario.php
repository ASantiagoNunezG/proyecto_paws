<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AUsuario extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $primaryKey = 'id_usuario';

    protected $fillable = ['name','apellido','email','foto','celular','num_documento', 'id_tipo_doc'];
}
