<?php

namespace App\Http\Controllers;

use App\Models\ACitaAdopcion;
use App\Models\AEstadoReserva;
use App\Models\AMascota;
use App\Models\AUsuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class ACitaAdopcionController extends Controller
{
    public function index()
    {
        $citas = ACitaAdopcion::orderBy('fecha')->get();
        $reservas = AEstadoReserva::all();
        return view('admin.citas.index', compact('citas', 'reservas'));
    }
    public function create()
    {
        $reservas = AEstadoReserva::where('nombre', 'Reservado')->get();
        $usuarios = AUsuario::where('role', '<>', 'administrador')->get();
        $mascotas = AMascota::where('id_estadomascota', '<>', 3)->get();
        return view('admin.citas.create', compact('reservas', 'usuarios', 'mascotas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'id_mascota' => 'required',
            'id_usuario' => 'required',
            'id_estadoreserva' => 'in:1',
        ]);

        // Verificar si ya existe una cita para la misma fecha, hora y mascota
        $citaExistente = ACitaAdopcion::where('fecha', $request->fecha)
            ->where('hora', $request->hora)
            ->where('id_mascota', $request->id_mascota)
            ->where('id_estadoreserva', '1')
            ->first();


        if ($citaExistente) {


            session()->flash('alert', [
                'type' => 'danger',
                'message' => '¡Hubo un error al guardar la cita!Ya hay una cita programada para esta fecha y hora',
            ]);
            return redirect()->back();
        }

        ACitaAdopcion::create(
            $request->all()
        );
        // Redirige de nuevo a la página anterior o a donde desees
        return redirect()->route('citas.index')->with('success', 'Cita agendada correctamente.');
    }

    public function update(Request $request, $id){
        $request->validate([
            'fecha' => 'required',
            'hora' => 'required',
            'id_estadoreserva' => 'required',
        ]);
    
        $cita = ACitaAdopcion::find($id);
    
        // Verificar si ya existe una cita para la misma fecha, hora y mascota (o criterio relevante)
        $citaExistente = ACitaAdopcion::where('fecha', $request->fecha)
            ->where('hora', $request->hora)
            ->where('id_mascota', $cita->id_mascota) // Ajusta según tu estructura de datos
            ->where('id_citamascota', '!=', $id) // Excluye la propia cita que estás editando
            ->where('id_estadoreserva', '1')
            ->first();
    
        if ($citaExistente) {
            // Maneja el conflicto de fecha y hora
            session()->flash('alert', [
                'type' => 'danger',
                'message' => '¡Hubo un error al guardar la cita! Ya hay una cita programada para esta fecha y hora',
            ]);
            return redirect()->back();
        }
    
        // Actualizar los campos específicos
        $cita->update([
            'fecha' => $request->fecha,
            'hora' => $request->hora,
            'id_estadoreserva' => $request->id_estadoreserva,
        ]);
    
        // Redirige de nuevo a la página anterior o a donde desees
        return redirect()->route('citas.index')->with('success', 'Cita actualizada correctamente.');
    }

    public function destroy($id)
    {
        ACitaAdopcion::find($id)->delete();
        return redirect()->route('citas.index')->with('success', 'Registro de cita eliminado');
    }
}
