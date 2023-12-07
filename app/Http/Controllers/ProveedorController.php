<?php

namespace App\Http\Controllers;

use App\Models\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index(Request $request)
    {
        $filtro_nombre = $request->input('nombre');

        $proveedores = Proveedor::when($filtro_nombre, function ($query) use ($filtro_nombre) {
            return $query->where('nombre', 'like', '%' . $filtro_nombre . '%');
        })->paginate(10);

        return view('admin.proveedores.index', compact('proveedores'));
    }
}
