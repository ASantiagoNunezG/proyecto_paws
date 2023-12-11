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
}
