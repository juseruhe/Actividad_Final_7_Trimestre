@extends('layouts.acme.app')

@section('content')

@foreach($tipo_vehiculos as $tipo_vehiculo)
<form action="{{route('tipo_vehiculo.update',$tipo_vehiculo->id)}}" method="post">

@csrf
@method('PUT')
<h2 class="is-size-2 has-text-centered"> Actualizar un Tipo de Vehículo</h2>

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Nombre de Tipo de Vehículo</label>

<input type="text" class="input" name="Nombre_Tipo_Vehiculo" value="{{$tipo_vehiculo->Nombre_Tipo_Vehiculo}}" placeholder="Escribe la ciudad">

<input type="submit" class="button is-warning  mb-4 mt-4" value="Actualizar Tipo_Vehiculo">



</form>






@endforeach




@endsection