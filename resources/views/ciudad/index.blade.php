@extends('layouts.acme.app')

@section('content')

<a href="{{route('ciudad.create')}}">Crear Ciudad</a>

<table class="table is-bordered">
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