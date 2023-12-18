<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UserAdopcionController;
use App\Http\Controllers\UserProductoController;

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
    Route::get('/administrador', [AdminController::class, 'AdminDashboard'])->name('administrador');
    Route::get('/administrador/proveedores', [ProveedorController::class, 'index'])->name('proveedores.index');

});

Route::middleware(['auth', 'role:usuario'])->group(function(){
    Route::get('/usuario', [UserController::class, 'UserDashboard'])->name('usuario');
    Route::get('/usuario/nosotros', [UserController::class, 'usernosotros'])->name('nosotros');
    Route::resource('/usuario/adopcion', UserAdopcionController::class);
    Route::post('/reserva', [UserAdopcionController::class, 'reserva'])->name('adopcion.reserva');
    Route::resource('/producto', UserProductoController::class);

});