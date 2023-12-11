<?php

namespace App\Http\Controllers;

use App\Models\AProveedor;
use App\Models\ACategoria;
use App\Models\AProductos;
use Illuminate\Http\Request;

class AProductosController extends Controller
{
    public function index(){
        $productos = AProductos::orderBy('nombre')->paginate(5);
        return  view('admin.productos.index', compact('productos'));
    }
    public function create(){
        $categorias = ACategoria::all();
        $proveedores = AProveedor::all();
        return view('admin.productos.create', compact('categorias'), compact('proveedores'));
    }
    public function store(Request $request){
        $this->validate($request,[
            'nombre'=> 'required',
            'precio'=>'required',
            'cantidad'=>'required',
            'id_categoria'=>'required',
            'marca'=> 'required',
            'id_proveedor'=>'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        if ($request->hasFile('foto')) {
        $foto = $request->file('foto');
        $nombreFoto = time() . '_' . $foto->getClientOriginalName();
        $request->file('foto')->move(public_path('images/admin/fotos_productos'), $nombreFoto);
        AProductos::create(array_merge($request->all(), ['foto' => $nombreFoto]));
        } else {
            AProductos::create($request->except('foto'));
        }
        return redirect()->route('productos.index')->with('success', 'Producto creado satisfactoriamente');
    }

    public function show(){
        return 'show??';
    }

    public function edit($id){
        $productos = AProductos::find($id);
        $categorias = ACategoria::all();
        $proveedores = AProveedor::all();
        return view('admin.productos.edit',compact('productos', 'categorias', 'proveedores'));
    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'nombre'=> 'required',
            'precio'=>'required',
            'cantidad'=>'required',
            'id_categoria'=>'required',
            'marca'=> 'required',
            'id_proveedor'=>'required',
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        $producto = AProductos::find($id);

        if ($request->hasFile('foto')) {
            // Procesar y guardar la nueva imagen
            $foto = $request->file('foto');
            $nombreFoto = time() . '_' . $foto->getClientOriginalName();
            $foto->move(public_path('images/admin/fotos_productos'), $nombreFoto);

            // Actualizar los demás campos y el nombre de la imagen si es necesario
            $producto->update(array_merge($request->except('foto'), ['foto' => $nombreFoto]));
        } else {
            // Si no hay una nueva imagen, actualizar solo los demás campos
            $producto->update($request->except('foto'));
        }

        return redirect()->route('productos.index')->with('success', 'Producto actualizado satisfactoriamente');
    }
    public function destroy($id){
        AProductos::find($id)->delete();
        return redirect()->route('productos.index')->with('success','Producto eliminado');
    }

    public function buscar(Request $request)
    {
        // Obtener el término de búsqueda del formulario
        $query = $request->input('producto');

        // Realizar la búsqueda en la base de datos
        $productos = AProductos::where('nombre', 'LIKE', "%$query%")->paginate(10);

        // Retornar la vista con los resultados de la búsqueda
        return view('admin.productos.index', compact('productos'));
    }
}
