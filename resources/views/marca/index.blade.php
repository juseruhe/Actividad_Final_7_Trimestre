@extends('layouts.acme.app')

@section('content')

<a href="">Crear Marca</a>

<table>
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

<a href="{{route('marca.show',$marca->id)}}">Mostrar</a>
<a href="{{route('marca.edit',$marca->id)}}">Actualizar</a>
<button>Eliminar</button>
</form>
</td>
@endforeach
</tr>





</table>





@endsection