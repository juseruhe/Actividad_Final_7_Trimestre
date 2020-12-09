@extends('layouts.acme.app')

@section('content')

<table class="table is-bordered">
<tr>
<td>ID</td>
<td>Número de Cédula</td>
<td>Primer Nombre</td>
<td>Segundo Nombre</td>
<td>Apellidos</td>
<td>Dirección</td>
<td>Teléfono</td>
<td>Ciudad</td>


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
</tr>
@endforeach






</table>









@endsection