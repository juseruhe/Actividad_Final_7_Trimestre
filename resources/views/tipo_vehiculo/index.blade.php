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

<form action="" method="post">

@csrf

@method('DELETE')

<a href="{{route('tipo_vehiculo.show',$tipo_vehiculo->id)}}">Mostrar</a>
<a href="">Actualizar</a>
<button>Eliminar</button>
</form>
</td>
@endforeach
</tr>





</table>





@endsection