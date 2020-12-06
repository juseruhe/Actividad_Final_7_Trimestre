<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Propietario;

use App\Models\Ciudad;

class PropietarioController extends Controller
{
    
    public function index(){

     $propietarios = Propietario::get();

     return view('propietario.index',compact('propietarios'));


    }


}
