@extends('layouts.acme.app')

@section('content')

<a href="">Crear Color</a>

<table>
<tr>
<td>ID</td>
<td>Nombre del Color</td>
<td>Acciones</td>
</tr>
<tr>
@foreach($colores as $color)
<td>{{$color->id}}</td>
<td>{{$color->Nombre_Color}}</td>
<td>

<form action="{{route('color.destroy',$color->id)}}" method="post">

@csrf

@method('DELETE')

<a href="{{route('color.show',$color->id)}}">Mostrar</a>
<a href="{{route('color.edit',$color->id)}}">Actualizar</a>
<button>Eliminar</button>
</form>
</td>
@endforeach
</tr>





</table>





@endsection