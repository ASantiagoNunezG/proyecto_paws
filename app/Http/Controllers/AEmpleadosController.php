<?php

namespace App\Http\Controllers;

use App\Models\AEmpleados;
use Illuminate\Http\Request;

class AEmpleadosController extends Controller
{
    public function index(){
        $empleados = AEmpleados::all();
        return view('admin.empleados.index', compact('empleados'));
    }
}
