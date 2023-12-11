<?php

use App\Models\AMascota;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AMascotaController;
use App\Http\Controllers\AUsuarioController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\AProductosController;
use App\Http\Controllers\AProveedorController;
use App\Http\Controllers\AAdopcionesController;
use App\Http\Controllers\AEmpleadosController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Definiendo y protegiendo las rutas segun los roles
Route::middleware(['auth', 'role:administrador'])->group(function(){

    //Ruta principal
    Route::get('/administrador', [AdminController::class, 'AdminDashboard'])->name('administrador');

    //Haciendo la ruta para mascotas
    //Route::post('razas/por_tipo', [TuControlador::class, 'razasPorTipo'])->name('razas.por_tipo');
    //Route::post('administrador/mascotas/create/buscar', [AMascotaController::class, 'buscarUsuario'])->name('buscar.usuarios');
    Route::post('administrador/mascotas/filtrar', [AMascotaController::class, 'filtrar'])->name('mascotas.filtrar');
    Route::resource('administrador/mascotas', AMascotaController::class);

    //Haciendo lo de productos con resource y la uuta para la búsqueda de productos
    Route::get('administrador/productos/buscar', [AProductosController::class, 'buscar'])->name('productos.buscar');
    Route::resource('administrador/productos', AProductosController::class);

    //Ruta para usuarios
    Route::resource('administrador/usuarios', AUsuarioController::class);

    //Ruta para proveedores
    Route::get('administrador/proveedores/buscar',[AProveedorController::class, 'buscar'])->name('proveedores.buscar');
    Route::resource('administrador/proveedores', AProveedorController::class);
    
    //Ruta para adopciones
    Route::resource('/administrador/adopciones', AAdopcionesController::class);

    //Ruta de empleados
    Route::resource('/administrador/empleados', AEmpleadosController::class);
});

Route::middleware(['auth', 'role:usuario'])->group(function(){
    Route::get('/usuario', [UserController::class, 'UserDashboard'])->name('usuario');

});