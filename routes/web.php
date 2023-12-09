<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\UserAdopcionController;
use App\Http\Controllers\CartController;
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
    Route::resource('adopcion', UserAdopcionController::class);
});


Route::get('/shop', [CartController::class, 'shop'])->name('shop');
Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');
Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
