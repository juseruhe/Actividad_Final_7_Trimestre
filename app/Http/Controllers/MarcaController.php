<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Marca;

class MarcaController extends Controller
{
    public function index(){

    $marcas= Marca::all();

    return view('marca.index', compact('marcas'));

    }

    public function create(){

        return view('marca.create');
    }

    public function store(Request $request){

        Marca::create($request->all());

        return redirect()->route('marca.index');
    }

    public function show($id){

        $marcas = Marca::find($id)
       ->where('id', '=', $id)
       ->get();

       return view('marca.show',compact('marcas'));
    }

    public function edit($id){

        $marcas = Marca::find($id)
       ->where('id', '=', $id)
       ->get();

       return view('marca.edit',compact('marcas'));
    }


    public function update(Request $request, $id){

      Marca::find($id)->update($request->all());

      return redirect()->route('marca.show',$id);

    }

    public function destroy($id){

        Marca::find($id)->delete();

        return redirect()->route('marca.index');
    }
}
