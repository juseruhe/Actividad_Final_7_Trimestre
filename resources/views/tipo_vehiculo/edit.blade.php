@extends('layouts.acme.app')

@section('content')

@foreach($tipo_vehiculos as $tipo_vehiculo)
<form action="{{route('tipo_vehiculo.update',$tipo_vehiculo->id)}}" method="post">

@csrf
@method('PUT')
<h2> Actualizar un Tipo de Vehículo</h2>

<label for="Nombre de Ciudad"> Nombre de Tipo de Vehículo</label>

<input type="text" name="Nombre_Tipo_Vehiculo" value="{{$tipo_vehiculo->Nombre_Tipo_Vehiculo}}" placeholder="Escribe la ciudad">

<input type="submit" value="Actualizar Tipo_Vehiculo">



</form>






@endforeach




@endsection