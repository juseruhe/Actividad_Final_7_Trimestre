<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Vehiculo;

use App\Models\Color;

use App\Models\Marca;

use App\Models\Tipo_Vehiculo;

use App\Models\Conductor;

use App\Models\Propietario;

class VehiculoController extends Controller
{
    

    public function index(){

        $vehiculos = Vehiculo::all();

        return view('vehiculo.index', compact('vehiculos'));

    }


    public function create(){

        $colores = Color::all();

        $marcas = Marca::all();

        $tipo_vehiculos = Tipo_Vehiculo::all();

        $conductores = Conductor::all();

        $propietarios = Propietario::all();


        return view('vehiculo.create')->with(compact('colores'))
        ->with(compact('marcas'))
        ->with(compact('tipo_vehiculos'))
    ->with(compact('conductores'))
    ->with(compact('propietarios'));
    }


    public function store(Request $request){

        Vehiculo::create($request->all());

        return redirect()->route('vehiculo.index');
    }

    public function show($id){


        $vehiculos = Vehiculo::find($id)
        ->all()
        ->where('id', "=", $id);


        return view('vehiculo.show',compact('vehiculos'));



    }


     public function edit($id){

        
        $vehiculos = Vehiculo::find($id)
        ->all()
        ->where('id', "=", $id);

        $colores = Color::all();

        $marcas = Marca::all();

        $tipo_vehiculos = Tipo_Vehiculo::all();

        $conductores = Conductor::all();

        $propietarios = Propietario::all();



        return view('vehiculo.edit')->with(compact('vehiculos'))
        ->with(compact('colores'))
        ->with(compact('marcas'))
        ->with(compact('tipo_vehiculos'))
    ->with(compact('conductores'))
    ->with(compact('propietarios'));
 }

 public function update(Request $request,$id){

     Vehiculo::find($id)->update($request->all());

     return redirect()->route('vehiculo.show',$id);

 }

 public function destroy($id){

    Vehiculo::find($id)->delete();

    return redirect()->route('vehiculo.index');

 }

}
