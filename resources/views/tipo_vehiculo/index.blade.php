@extends('layouts.acme.app')

@section('content')

<a class="button has-background-link has-text-white" href="{{route('tipo_vehiculo.create')}}">Crear Tipo de Vehiculos</a>

<table class="table is-bordered m-4">
<tr class="has-background-link has-text-white">
<td>ID</td>
<td>Nombre del Tipo del Vehículo</td>
<td>Acciones</td>
</tr>
<tr>
@foreach($tipo_vehiculos as $tipo_vehiculo)
<td>{{$tipo_vehiculo->id}}</td>
<td>{{$tipo_vehiculo->Nombre_Tipo_Vehiculo}}</td>
<td>

<form action="{{route('tipo_vehiculo.destroy',$tipo_vehiculo->id)}}" method="post">

@csrf

@method('DELETE')

<a href="{{route('tipo_vehiculo.show',$tipo_vehiculo->id)}}" class="button is-info">Mostrar</a>
<a href="{{route('tipo_vehiculo.edit',$tipo_vehiculo->id)}}" class="button is-warning">Actualizar</a>
<button class="button is-danger">Eliminar</button>
</form>
</td>
</tr>
@endforeach






</table>





@endsection