<?php

namespace App\Http\Controllers;

use App\Models\AEmpleados;
use App\Models\APuesto;
use Illuminate\Http\Request;

class AEmpleadosController extends Controller
{
    public function index(){
        $empleados = AEmpleados::all();
        return view('admin.empleados.index', compact('empleados'));
    }
    public function create(){
        $puestos = APuesto::all();
        return view('admin.empleados.create', compact('puestos'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'nombre'=> 'required',
            'apellido'=>'required',
            'dni'=>'required',
            'id_puesto'=> 'required',
            'direccion'=>'required',
            'celular'=>'required',
            'correo'=>'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = time() . '_' . $foto->getClientOriginalName();
            $request->file('foto')->move(public_path('images/admin/fotos_empleados'), $nombreFoto);
            AEmpleados::create(array_merge($request->all(), ['foto' => $nombreFoto]));
        } else {
            AEmpleados::create($request->except('foto'));
        }
        return redirect()->route('empleados.index')->with('success', 'Empleado registrado correctamente'); 
    }
    public function edit($id){
        $empleado = AEmpleados::find($id);
        $puestos = APuesto::all();
        return view('admin.empleados.edit', compact('empleado', 'puestos'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'nombre' => 'required',
            'apellido' => 'required',
            'dni' => 'required',
            'id_puesto' => 'required',
            'direccion' => 'required',
            'celular' => 'required',
            'correo' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $empleado = AEmpleados::find($id);

        if (!$empleado) {
            return redirect()->route('empleados.index')->with('error', 'Empleado no encontrado');
        }
        // Guardar la imagen si se proporciona una nueva
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $nombreFoto = time() . '_' . $foto->getClientOriginalName();
            $request->file('foto')->move(public_path('images/admin/fotos_empleados'), $nombreFoto);
            // Eliminar la foto anterior si existe
            if ($empleado->foto) {
                $fotoAnterior = public_path('images/admin/fotos_empleados') . '/' . $empleado->foto;
                if (file_exists($fotoAnterior)) {
                    unlink($fotoAnterior);
                }
            }
        }
        // Actualizar el modelo con los nuevos datos y la nueva foto si existe
        $empleado->update(array_merge($request->except('foto'), ['foto' => $nombreFoto ?? $empleado->foto]));

        return redirect()->route('empleados.index')->with('success', 'Empleado actualizado correctamente');
        }

    public function destroy($id){
        AEmpleados::find($id)->delete();
        return redirect()->route('empleados.index')->with('success','Registro del mpleado eliminado');
    }
}
