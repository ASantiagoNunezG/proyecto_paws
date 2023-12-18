<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Mascota;
use App\Models\TipoMascota;
use App\Models\Raza;
use App\Models\EstadoMascota;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function UserDashboard()
    {
        // Obtenemos las mascotas de estado_mascota 1 y solo mostramos 4 mascotas "take"
        $mascotas = Mascota::where('id_estadomascota', 1)
            ->take(4)
            ->get();
        
        // Solo pasa la variable $mascotas a la vista
        return view('user.user_dashboard', compact('mascotas'));
    }

    public function usernosotros()
    {
        return view('user.nosotros');
    }
    
}
