@extends('layouts.acme.app')

@section('content')

<a href="">Crear Propietario</a>

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

<a href="{{route('propietario.show',$propietario->id)}}">Mostrar</a>
<a href="{{route('propietario.edit',$propietario->id)}}">Actualizar</a>
<button>Eliminar</button>
</form>
</td>
@endforeach
</tr>





</table>





@endsection