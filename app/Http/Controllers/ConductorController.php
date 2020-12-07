<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Conductor;

use App\Models\Ciudad;

class ConductorController extends Controller
{
    
   public function index(){

     $conductores = Conductor::all();

     return view('conductor.index',compact('conductores'));


   }

   public function create(){

    $ciudades = Ciudad::all();

   return view('conductor.create',compact('ciudades'));

   }

   public function store(Request $request){

      Conductor::create($request->all());

      return redirect()->route('conductor.index');

   }


   public function show($id){

 $conductores = Conductor::find($id)
 ->where('id', '=', $id)
 ->get();

 return view('conductor.show', compact('conductores'));

   }


   public function edit($id){

    $conductores = Conductor::find($id)
    ->where('id', '=', $id)
    ->get();
   
     $ciudades = Ciudad::all();

    return view('conductor.edit', compact('conductores'),compact('ciudades'));
   
      }


      public function update(Request $request, $id){


        Conductor::find($id)->update($request->all());

        return redirect()->route('conductor.show',$id);
      }

    public function destroy($id){

     Conductor::find($id)->delete();

     return redirect()->route('conductor.index');

    }


}
