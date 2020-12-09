@extends('layouts.acme.app')

@section('content')

<a href="">Crear Conductor</a>

<table>
<tr>
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

<a href="{{route('conductor.show',$conductor->id)}}">Mostrar</a>
<a href="{{route('conductor.edit',$conductor->id)}}">Actualizar</a>

<button>Eliminar</button>
</form>
</td>
@endforeach
</tr>





</table>





@endsection