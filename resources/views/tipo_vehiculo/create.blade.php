@extends('layouts.acme.app')

@section('content')

<form action="{{route('tipo_vehiculo.store')}}" method="post">

@csrf
<h2 class="is-size-2 has-text-centered"> Crear un Tipo de Vehículo</h2>

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Nombre del Tipo de Vehículo</label>

<input class="input" type="text" name="Nombre_Tipo_Vehiculo" placeholder="Escribe la ciudad">

<input type="submit" class="button is-success mb-4 mt-4" value="Crear Marca">



</form>








@endsection