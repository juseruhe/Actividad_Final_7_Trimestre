@extends('layouts.acme.app')

@section('content')

<div class="columns">
<div class="column is-full">
<a class="button has-background-link has-text-white" href="{{route('conductor.create')}}">Crear Conductor</a>
</div>
</div> 

<div class="columns">
<table class=" table is-bordered m-4 column is-full">
<tr class="is-full has-background-link has-text-white ">
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
@foreach($conductores as $conductor)

<td>{{$conductor->id}}</td>
<td>{{$conductor->Numero_Cedula}}</td>
<td>{{$conductor->Primer_Nombre}}</td>
<td>{{$conductor->Segundo_Nombre}}</td>
<td>{{$conductor->Apellidos}}</td>
<td>{{$conductor->Direccion}}</td>
<td>{{$conductor->Telefono}}</td>
<td>{{$conductor->ciudad->Nombre_Ciudad}}</td>
<td>

<form action="{{route('conductor.destroy',$conductor->id)}}" method="post">

@csrf

@method('DELETE')

<a href="{{route('conductor.show',$conductor->id)}}" class="button is-info">Mostrar</a>
<a href="{{route('conductor.edit',$conductor->id)}}" class="button is-warning">Actualizar</a>

<button class="button is-danger">Eliminar</button>
</form>
</td>
</tr>
@endforeach






</table>

</div>



@endsection