@extends('layouts.acme.app')

@section('content')

<a href="">Crear Tipo de Vehiculos</a>

<table>
<tr>
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
@endforeach
</tr>





</table>





@endsection