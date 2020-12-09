@extends('layouts.acme.app')

@section('content')

<form action="{{route('marca.store')}}" method="post">

@csrf
<h2> Crear una Marca</h2>

<label  class="label" for="Nombre de Ciudad"> Nombre del Marca</label>

<input type="text" name="Nombre_Marca" placeholder="Escribe la ciudad">

<input type="submit" class="button is-success" value="Crear Marca">



</form>








@endsection