@extends('layouts.acme.app')

@section('content')

<a href="{{route('ciudad.create')}}">Crear Ciudad</a>

<table>
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

<a href="{{route('ciudad.show',$ciudad->id)}}">Mostrar</a>
<a href="{{route('ciudad.edit',$ciudad->id)}}">Actualizar</a>
<button href="">Eliminar</button>
</form>
</td>
@endforeach
</tr>





</table>





@endsection