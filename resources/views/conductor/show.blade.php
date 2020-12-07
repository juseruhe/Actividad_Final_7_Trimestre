@extends('layouts.acme.app')

@section('content')

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

@endforeach
</tr>





</table>









@endsection