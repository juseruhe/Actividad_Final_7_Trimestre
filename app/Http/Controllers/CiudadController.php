<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Ciudad;

class CiudadController extends Controller
{
    

    public function index(){

        $ciudades = Ciudad::all();

        return view('ciudad.index', compact('ciudades'));
         

    }


    public function create(){

        return view('ciudad.create');
    }

    public function store (Request $request){

        Ciudad::create($request->all());

        return redirect()->route('ciudad.index');

    }

    public function show($id){

        $ciudades = Ciudad::all()
        ->where('id', '=', $id);

        return view('ciudad.show',compact('ciudades'));
    }


    public function edit($id){

     $ciudades = Ciudad::all()
     ->where('id', '=', $id);

     return view('ciudad.edit',compact('ciudades'));

    }

    public function update(Request $request, $id){

      Ciudad::find($id)->update($request->all());


      return redirect()->route('ciudad.show',$id);



    }


    public function destroy($id){


        Ciudad::find($id)->delete();

        return redirect()->route('ciudad.index');
    }

    


}
