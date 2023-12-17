<?php

namespace App\Http\Controllers;

use App\Models\AAdopciones;
use App\Models\AEmpleados;
use App\Models\AMascota;
use App\Models\AUsuario;
use Illuminate\Http\Request;

class AAdopcionesController extends Controller
{
    public function index()
    {
        $adopciones = AAdopciones::all();
        return view('admin.adopciones.index', compact('adopciones'));
    }
    public function create()
    {
        $mascotas = AMascota::where('id_estadomascota', '<>', 3)->get();
        $empleados = AEmpleados::all();
        $usuarios = AUsuario::where('role', '<>', 'Administrador')->get();
        return view('admin.adopciones.create', compact('mascotas', 'empleados', 'usuarios'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'fecha' => 'required',
            'id_mascota' => 'required',
            'id_usuario' => 'required',
            'id_empleado' => 'required',
        ]);
        AAdopciones::create($request->all());
        // Obtener la mascota asociada a la adopción
        $mascota = AMascota::find($request->id_mascota);

        $usuario = AUsuario::find($request->id_usuario);

        // Verificar que la mascota y el usuario existan
        if ($mascota && $usuario) {
            // Actualizar el estado de la mascota a "adoptado" y asignar el usuario
            $mascota->update([
                'id_estadomascota' => 3, // 3 es el ID del estado "adoptado", ajusta según tu modelo
                'id_usuario' => $usuario->id_usuario,
            ]);
        }
        return  redirect()->route('adopciones.index')->with('success', 'Adopción guardada correctamente.');
    }
    public function destroy($id)
    {
        AAdopciones::find($id)->delete();
        return redirect()->route('adopciones.index')->with('success', 'Registro de adopcion eliminado');
    }
}
