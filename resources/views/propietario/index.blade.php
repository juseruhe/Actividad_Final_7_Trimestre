@extends('layouts.acme.app')

@section('content')

<div class="columns">
<div class="column is-full">
<a  class="button has-background-info has-text-white" href="{{route('propietario.create')}}">Crear Propietario</a>
</div>
</div>

<div class="columns">
<table class="table is-bordered column is-full has-text-centered mb-4">
<tr class="has-background-link has-text-white">
<td>ID</td>
<td>Número de Cédula</td>
<td>Primer Nombre</td>
<td>Segundo Nombre</td>
<td>Apellidos</td>
<td>Dirección</td>
<td>Teléfono</td>
<td>Ciudad</td>
<td>Acciones</td>
</tr>
<tr>
@foreach($propietarios as $propietario)

<td>{{$propietario->id}}</td>
<td>{{$propietario->Numero_Cedula}}</td>
<td>{{$propietario->Primer_Nombre}}</td>
<td>{{$propietario->Segundo_Nombre}}</td>
<td>{{$propietario->Apellidos}}</td>
<td>{{$propietario->Direccion}}</td>
<td>{{$propietario->Telefono}}</td>
<td>{{$propietario->ciudad->Nombre_Ciudad}}</td>
<td>

<form action="{{route('propietario.destroy',$propietario->id)}}" method="post">

@csrf

@method('DELETE')

<a href="{{route('propietario.show',$propietario->id)}}" class="button is-info">Mostrar</a>
<a href="{{route('propietario.edit',$propietario->id)}}" class="button is-warning">Actualizar</a>
<button class="button is-danger">Eliminar</button>
</form>
</td>
</tr>

@endforeach





</table>


</div>


@endsection