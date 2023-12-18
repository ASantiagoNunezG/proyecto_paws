<?php

namespace App\Http\Controllers;

use App\Models\AEstadoMascota;
use App\Models\AMascota;
use App\Models\ARazas;
use App\Models\ATipoMascota;
use App\Models\AUsuario;
use Illuminate\Http\Request;

class AMascotaController extends Controller
{
    public function index()
    {

        $mascotas = AMascota::all();
        return view('admin.mascotas.index', compact('mascotas'));
    }
    public function create()
    {
        $estados = AEstadoMascota::all();
        $tipos = ATipoMascota::all();
        $razas = ARazas::all();
        $usuarios = AUsuario::where('role', '!=', 'administrador')->get();
        return view('admin.mascotas.create', compact('estados', 'razas', 'tipos', 'usuarios'));
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            "id_estadomascota" => 'required',
            "id_tipomascota" => "required",
            "id_raza" => "required",
            "nombre" => "required",
            "sexo" => "required",
            "tamano" => "required",
            "edad" => "required",
            'id_usuario' => 'nullable',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);

        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = time() . '_' . $foto->getClientOriginalName();
            $request->file('foto')->move(public_path('images/admin/fotos_mascotas'), $nombreFoto);
            AMascota::create(array_merge($request->all(), ['foto' => $nombreFoto]));
        } else {
            AMascota::create($request->except('foto'));
        }
        return redirect()->route('mascotas.index')->with('success', 'Mascota registrada satisfactoriamente');
    }

    public function edit($id)
    {
        $mascota = AMascota::find($id);
        $estados = AEstadoMascota::all();
        $tipos = ATipoMascota::all();
        $razas = ARazas::all();
        $usuarios = AUsuario::where('role', '!=', 'administrador')->get();
        return view('admin.mascotas.edit', compact('mascota','estados', 'razas', 'tipos', 'usuarios'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            "id_estadomascota" => 'required',
            "id_tipomascota" => "required",
            "id_raza" => "required",
            "nombre" => "required",
            "sexo" => "required",
            "tamano" => "required",
            "edad" => "required",
            'id_usuario' => 'nullable',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $mascota = AMascota::find($id);

        if ($request->hasFile('foto')) {
            // Procesar y guardar la nueva imagen
            $foto = $request->file('foto');
            $nombreFoto = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('images/admin/fotos_mascotas'), $nombreFoto);

            // Actualizar los demás campos y el nombre de la imagen si es necesario
            $mascota->update(array_merge($request->except('foto'), ['foto' => $nombreFoto]));
        } else {
            // Si no hay una nueva imagen, actualizar solo los demás campos
            $mascota->update($request->except('foto'));
        }

        return redirect()->route('mascotas.index')->with('success', 'Mascota actualizada satisfactoriamente');
    }

    public function destroy($id)
    {
        AMascota::find($id)->delete();
        return redirect()->route('mascotas.index')->with('success', 'Registro de la mascota removido');
    }

    public function filtrar(Request $request)
{
    // Lógica de filtrado según los valores en $request
    $query = AMascota::query();

    // Verificar si se ha marcado alguna casilla de verificación
    if ($request->has('categoria')) {
        $categorias = $request->input('categoria');

        // Filtrar según las categorías seleccionadas
        foreach ($categorias as $categoria) {
            switch ($categoria) {
                case 'Macho':
                    $query->where('sexo', '=', 'Macho'); 
                    break;
                case 'Hembra':
                    $query->where('sexo', '=', 'Hembra'); 
                    break;
                case 'Disponible':
                    $query->where('id_estadomascota', '=', 1); 
                    break;
                // Agrega más casos según tus necesidades
            }
        }
    }
    // Agrega más condiciones según tus necesidades
    $mascotas = $query->get();

    return view('admin.mascotas.index', compact('mascotas'));
}


    /*public function buscarUsuario(Request $request) {
        $estados = AEstadoMascota::all();
        $tipos = ATipoMascota::all();
        $razas = ARazas::all();
        $usuarios = AUsuario::all();
        // Obtener el término de búsqueda del formulario
        $terminoBusqueda = $request->input('buscar_usuario');
    
        // Realizar la búsqueda en la base de datos
        $usuarios = AUsuario::where('name', 'LIKE', "%$terminoBusqueda%")
                        ->orWhere('email', 'LIKE', "%$terminoBusqueda%")
                        ->get();
    
        // Retornar la vista con los resultados de la búsqueda
        return view('admin.mascotas.create', compact('estados','razas','tipos','usuarios'));
    }*/

    /*public function razasPorTipo(Request $request)
    {
        $idTipoMascota = $request->input('id_tipo_mascota');
        $razas = ARazas::where('id_tipo_mascota', $idTipoMascota)->get();
        return response()->json(['razas' => $razas]);
    }*/
}
