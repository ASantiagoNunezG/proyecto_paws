<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\TipoMascota;
use App\Models\Raza;
use App\Models\CitaAdopcion;
use App\Models\EstadoMascota;
use Illuminate\Support\Facades\Auth;

class UserAdopcionController extends Controller
{

    public function index()
    {     
        // Obtenemos las mascotas de estado_mascota 1 y 3
        $mascotas = Mascota::where('id_estadomascota', 1)->orWhere('id_estadomascota', 2)->get();
    
        // Combina todas las variables necesarias antes de pasarlas a la vista
        return view('user.adopcion.index', compact('mascotas'));
    }

    public function show($id)
    {
        $mascota = Mascota::find($id);

        return view('user.adopcion.informacion', ['mascota' => $mascota]);
    }

    public function reserva(Request $request) {
        // Datos requeridos
        $request->validate([
            'fecha' => 'required|date',
            'hora' => 'required'
        ]);
    
        // Obtén la mascota seleccionada
        $mascota = Mascota::find($request->input('id_mascota'));
    
        // Crea una nueva instancia de CitaAdopcion y guarda los datos
        $citaAdopcion = new CitaAdopcion([
            'fecha' => $request->input('fecha'),
            'hora' => $request->input('hora'),
            'id_mascota' => $mascota->id_mascota,
            'id_usuario' => Auth::user()->id_usuario,
            'id_estadoreserva' => 1
        ]);

        $citaAdopcion->save();

        $mascota->update([
            'id_estadomascota' => 2, // Cambia el estado de la mascota, "Reservada"
        ]);

        $mascotas = Mascota::where('id_estadomascota', 1)->get();

        // Redirige al usuario a donde desees después de completar la reserva
        return redirect()->route('adopcion.index');
    }

}
