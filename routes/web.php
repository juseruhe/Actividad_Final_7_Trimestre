<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CiudadController;

use App\Http\Controllers\PropietarioController;

use App\Http\Controllers\ConductorController;

use App\Http\Controllers\ColorController;

use App\Http\Controllers\MarcaController;

use App\Http\Controllers\Tipo_VehiculoController;

use App\Http\Controllers\VehiculoController;


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

// Rutas de Conductor

Route::get('conductor',[ConductorController::class,'index'])->name('conductor.index');
Route::get('conductor/create',[ConductorController::class,'create'])->name('conductor.create');
Route::post('conductor',[ConductorController::class,'store'])->name('conductor.store');
Route::get('conductor/{id}',[ConductorController::class,'show'])->name('conductor.show');
Route::get('conductor/edit/{id}',[ConductorController::class,'edit'])->name('conductor.edit');
Route::put('conductor/{id}',[ConductorController::class,'update'])->name('conductor.update');
Route::delete('conductor/{id}',[ConductorController::class,'destroy'])->name('conductor.destroy');


// Rutas del Color
Route::get('color',[ColorController::class,'index'])->name('color.index');
Route::get('color/create',[ColorController::class,'create'])->name('color.create');
Route::post('color',[ColorController::class,'store'])->name('color.store');
Route::get('color/{id}',[ColorController::class,'show'])->name('color.show');
Route::get('color/edit/{id}',[ColorController::class,'edit'])->name('color.edit');
Route::put('color/{id}',[ColorController::class,'update'])->name('color.update');
Route::delete('color/{id}',[ColorController::class,'destroy'])->name('color.destroy');

// Rutas de Marca
Route::get('marca',[MarcaController::class,'index'])->name('marca.index');
Route::get('marca/create',[MarcaController::class,'create'])->name('marca.create');
Route::post('marca',[MarcaController::class,'store'])->name('marca.store');
Route::get('marca/{id}',[MarcaController::class,'show'])->name('marca.show');
Route::get('marca/edit/{id}',[MarcaController::class,'edit'])->name('marca.edit');
Route::put('marca/{id}',[MarcaController::class,'update'])->name('marca.update');
Route::delete('marca/{id}',[MarcaController::class,'destroy'])->name('marca.destroy');

// Rutas de Tipo de Vehiculo
Route::get('tipo_vehiculo',[Tipo_VehiculoController::class,'index'])->name('tipo_vehiculo.index');
Route::get('tipo_vehiculo/create',[Tipo_VehiculoController::class,'create'])->name('tipo_vehiculo.create');
Route::post('tipo_vehiculo',[Tipo_VehiculoController::class,'store'])->name('tipo_vehiculo.store');
Route::get('tipo_vehiculo/{id}',[Tipo_VehiculoController::class,'show'])->name('tipo_vehiculo.show');
Route::get('tipo_vehiculo/edit/{id}',[Tipo_VehiculoController::class,'edit'])->name('tipo_vehiculo.edit');
Route::put('tipo_vehiculo/{id}',[Tipo_VehiculoController::class,'update'])->name('tipo_vehiculo.update');
Route::delete('tipo_vehiculo/{id}',[Tipo_VehiculoController::class,'destroy'])->name('tipo_vehiculo.destroy');


// Rutas de Vehiculo
Route::get('vehiculo',[VehiculoController::class,'index'])->name('vehiculo.index');
Route::get('vehiculo/create',[VehiculoController::class,'create'])->name('vehiculo.create');
Route::post('vehiculo',[VehiculoController::class,'store'])->name('vehiculo.store');
Route::get('vehiculo/{id}',[VehiculoController::class,'show'])->name('vehiculo.show');
Route::get('vehiculo/edit/{id}',[VehiculoController::class,'edit'])->name('vehiculo.edit');
Route::put('vehiculo/{id}',[VehiculoController::class,'update'])->name('vehiculo.update');
Route::delete('vehiculo/{id}',[VehiculoController::class,'destroy'])->name('vehiculo.destroy');



