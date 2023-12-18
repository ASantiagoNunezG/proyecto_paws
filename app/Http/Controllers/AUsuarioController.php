<?php

namespace App\Http\Controllers;

use App\Models\AUsuario;
use Illuminate\Http\Request;

class AUsuarioController extends Controller
{
    //
    public function index()
    {
        $usuarios = AUsuario::where('role', '<>', 'administrador')->get();
        return view('admin.usuarios.index', compact('usuarios'));
    }
    public function show($id){
        $usuario =  AUsuario::find($id);
        return view('admin.usuarios.show', compact('usuario'));
    }
    public function create(){
        return view('admin.usuarios.create');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'apellido'=>'required',
            'email'=>'required',
            'celular'=>'required',
            'tipo'=> 'required',
            'num_documento'=>'required',
            'id_tipo_doc'=>'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $nombreFoto = time() . '_' . $foto->getClientOriginalName();
        $request->file('foto')->move(public_path('images/admin/fotos_usuarios'), $nombreFoto);
        AUsuario::create(array_merge($request->all(), ['foto' => $nombreFoto]));
        } else {
            AUsuario::create($request->except('foto'));
        }
        return redirect()->route('usuarios.index')->with('success', 'Usuario registrado satisfactoriamente');
    }
    public function edit($id){
        $usuarios = AUsuario::find($id);

        return view('admin.usuarios.edit', compact('usuarios'));
    }
    public function update(Request $request, $id){
        $this->validate($request, [
            'name' => 'required',
            'apellido' => 'nullable',
            'email' => 'required',
            'celular' => 'nullable',
            'tipo' => 'nullable',
            'num_documento' => 'nullable',
            'id_tipo_doc' => 'nullable',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        $usuario = AUsuario::findOrFail($id);
    
        // Actualizar los campos comunes
        $usuario->update($request->except('foto'));
    
        // Verificar si se proporcionó una nueva foto
        if ($request->hasFile('foto')) {
            // Eliminar la foto anterior si existe
            if ($usuario->foto) {
                $rutaFotoAnterior = public_path('images/admin/fotos_usuarios/' . $usuario->foto);
                if (file_exists($rutaFotoAnterior)) {
                    unlink($rutaFotoAnterior);
                }
            }
    
            // Subir y almacenar la nueva foto
            $foto = $request->file('foto');
            $nombreFoto = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('images/admin/fotos_usuarios'), $nombreFoto);
    
            // Actualizar el campo de la foto en la base de datos
            $usuario->update(['foto' => $nombreFoto]);
        }
    
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado satisfactoriamente');
    }
    
    public function destroy($id){
        AUsuario::find($id)->delete();
        return redirect()->route('usuarios.index')->with('success','Producto eliminado');
    }
}
