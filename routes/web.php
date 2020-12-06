<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CiudadController;

use App\Http\Controllers\PropietarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Rutas 

// Ruta de Ciudad

Route::get('ciudad',[CiudadController::class,'index'])->name('ciudad.index');
Route::get('ciudad/create',[CiudadController::class,'create'])->name('ciudad.create');
Route::post('ciudad',[CiudadController::class,'store'])->name('ciudad.store');
Route::get('ciudad/{id}',[CiudadController::class,'show'])->name('ciudad.show');
Route::get('ciudad/edit/{id}',[CiudadController::class,'edit'])->name('ciudad.edit');
Route::put('ciudad/{id}',[CiudadController::class,'update'])->name('ciudad.update');
Route::delete('ciudad/{id}',[CiudadController::class,'destroy'])->name('ciudad.destroy');


// Rutas de Propietario

Route::get('propietario',[PropietarioController::class,'index'])->name('propietario.index');
Route::get('propietario/create',[PropietarioController::class,'create'])->name('propietario.create');
Route::post('propietario',[PropietarioController::class,'store'])->name('propietario.store');
Route::get('propietario/{id}',[PropietarioController::class,'show'])->name('propietario.show');
Route::get('propietario/edit/{id}',[PropietarioController::class,'edit'])->name('propietario.edit');
Route::put('propietario/{id}',[PropietarioController::class,'update'])->name('propietario.update');
Route::delete('propietario/{id}',[PropietarioController::class,'destroy'])->name('propietario.destroy');