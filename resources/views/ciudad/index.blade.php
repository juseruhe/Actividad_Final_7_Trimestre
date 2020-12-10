@extends('layouts.acme.app')

@section('content')

<h2 class="is-size-3 has-text-centered"> Mostrar Ciudades </h2>

<a href="{{route('ciudad.create')}}">Crear Ciudad</a>

<table class="table is-bordered has-text-centered mb-6 mt-4 has-text-weight-semibold">
<tr>
<td>ID</td>
<td>Nombre de la Ciudad</td>
<td>Acciones</td>
</tr>
<tr>
@foreach($ciudades as $ciudad)
<td>{{$ciudad->id}}</td>
<td>{{$ciudad->Nombre_Ciudad}}</td>
<td>

<form action="{{route('ciudad.destroy',$ciudad->id)}}" method="post">

@csrf

@method('DELETE')

<a href="{{route('ciudad.show',$ciudad->id)}}" class="button is-info">Mostrar</a>
<a href="{{route('ciudad.edit',$ciudad->id)}}" class="button is-warning">Actualizar</a>
<button class="button is-danger">Eliminar</button>
</form>
</td>
</tr>
@endforeach






</table>





@endsection