<?php

namespace App\Http\Controllers;

use App\Models\AUsuario;
use App\Models\Proveedor;
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
        return view('Holi');
    }
    public function destroy($id){
        AUsuario::find($id)->delete();
        return redirect()->route('usuarios.index')->with('success','Producto eliminado');
    }
}
