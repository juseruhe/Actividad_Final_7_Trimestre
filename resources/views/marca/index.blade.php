@extends('layouts.acme.app')

@section('content')

<div class="columns">
<div class="column is-full">
<a href="">Crear Marca</a>
</div>
</div>

<div class="columns">
<table class="table is-bordered column is-full">
<tr>
<td>ID</td>
<td>Nombre del Marca</td>
<td>Acciones</td>
</tr>
<tr>
@foreach($marcas as $marca)
<td>{{$marca->id}}</td>
<td>{{$marca->Nombre_Marca}}</td>
<td>

<form action="{{route('marca.destroy',$marca->id)}}" method="post">

@csrf

@method('DELETE')

<a href="{{route('marca.show',$marca->id)}}" class="button is-info">Mostrar</a>
<a href="{{route('marca.edit',$marca->id)}}" class="button is-warning">Actualizar</a>
<button class="button is-danger">Eliminar</button>
</form>
</td>
</tr>
@endforeach






</table>

</div>



@endsection