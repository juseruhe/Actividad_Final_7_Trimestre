<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Color;

class ColorController extends Controller
{
    
   public function index(){

    $colores = Color::all();

    return view('color.index', compact('colores'));

   }

   public function create(){

    return view('color.create');
   }


   public function store(Request $request){

    Color::create($request->all());

    return redirect()->route('color.index');

   }

   public function show($id){

    $colores = Color::find($id)
    ->where('id', '=', $id)
    ->get();

    return view('color.show', compact('colores'));

   }


   public function edit($id){

    $colores = Color::find($id)
    ->where('id', '=', $id)
    ->get();

    return view('color.edit', compact('colores'));


   }

   public function update(Request $request,$id){

     Color::find($id)->update($request->all());

     return redirect()->route('color.show',$id);
    
   }


   public function destroy($id){

     Color::find($id)->delete();

     return redirect()->route('color.index');

   }

}
