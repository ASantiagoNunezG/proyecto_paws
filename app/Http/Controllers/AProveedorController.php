<?php

namespace App\Http\Controllers;

use App\Models\AProveedor;
use Illuminate\Http\Request;

class AProveedorController extends Controller
{
    public function index(Request $request)
    {
        $proveedores = AProveedor::all();
        return view('admin.proveedores.index', compact('proveedores'));
    }

    public function buscar(Request $request){
        $filtro_nombre = $request->input('nombre');

        $proveedores = AProveedor::when($filtro_nombre, function ($query) use ($filtro_nombre) {
            return $query->where('nombre', 'like', '%' . $filtro_nombre . '%');
        })->paginate(10);

        return view('admin.proveedores.index', compact('proveedores'));
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:30',
            'ruc' => 'required|string|max:11',
            'telefono' => 'required|string|max:15',
        ]);
        AProveedor::create($request->all());
        return redirect()->route('proveedores.index');
    }

    public function update(Request $request, $id){
        $request->validate([
            'nombre' => 'required|string|max:30',
            'ruc' => 'required|string|max:11',
            'telefono' => 'required|string|max:15',
        ]);

        $proveedor = AProveedor::find($id);
        $proveedor->update($request->all());

        return redirect()->route('proveedores.index');
    }

    public function destroy($id){
        AProveedor::find($id)->delete();
        return redirect()->route('proveedores.index')->with('success','Proveedor retirado del registro');
    }
}
