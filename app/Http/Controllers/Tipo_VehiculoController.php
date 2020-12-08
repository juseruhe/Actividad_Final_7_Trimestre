<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Tipo_Vehiculo;
use Illuminate\Support\Facades\Redis;

class Tipo_VehiculoController extends Controller
{
   
    public function index(){

        $tipo_vehiculos = Tipo_Vehiculo::all();

        return view('tipo_vehiculo.index', compact('tipo_vehiculos'));
    }

    public function create(){

        return view('tipo_vehiculo.create');
    }
    
    public function store(Request $request){

        Tipo_Vehiculo::create($request->all());

        return redirect()->route('tipo_vehiculo.index');
    }

    public function show($id){

        $tipo_vehiculos = Tipo_Vehiculo::find($id)
        ->all()
        ->where('id', '=', $id);
        

        return view('tipo_vehiculo.show', compact('tipo_vehiculos'));
    }
}