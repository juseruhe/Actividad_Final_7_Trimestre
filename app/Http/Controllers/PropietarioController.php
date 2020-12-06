<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Propietario;

use App\Models\Ciudad;

class PropietarioController extends Controller
{
    
    public function index(){

     $propietarios = Propietario::all();

     return view('propietario.index',compact('propietarios'));


    }


    public function create(){

      $ciudades = Ciudad::all();

      return view('propietario.create', compact('ciudades'));


    }


    public function store(Request $request){

        Propietario::create($request->all());

        return redirect()->route('propietario.index');

    }


    public function show($id){

     $propietarios =  Propietario::find($id)
     ->where('id', '=', $id)
     ->get();

      return view('propietario.show', compact('propietarios'));


    }

    public function edit($id){

        $propietarios =  Propietario::find($id)
        ->where('id', '=', $id)
        ->get();

       $ciudades = Ciudad::all();
   
         return view('propietario.edit', compact('propietarios'), compact('ciudades'));

    }

    public function update(Request $request, $id){

        Propietario::find($id)->update($request->all());

        return redirect()->route('propietario.show', $id);


    }

    public function destroy($id){


        Propietario::find($id)->delete();

        return redirect()->route('propietario.index');
    }


}
