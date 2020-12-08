@extends('layouts.acme.app')

@section('content')

<form action="{{route('tipo_vehiculo.store')}}" method="post">

@csrf
<h2> Crear un Tipo de Vehículo</h2>

<label for="Nombre de Ciudad"> Nombre del Tipo de Vehículo</label>

<input type="text" name="Nombre_Tipo_Vehiculo" placeholder="Escribe la ciudad">

<input type="submit" value="Crear Marca">



</form>








@endsection