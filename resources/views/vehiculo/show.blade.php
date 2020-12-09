@extends('layouts.acme.app')

@section('content')

<table class="table is-bordered">
<tr>
<td>ID</td>
<td>Placa</td>
<td>Color</td>
<td>Marca</td>
<td>Tipo de Vehículo</td>
<td>Cédula del Conductor</td>
<td>Primer Nombre del Conductor</td>
<td>Segundo Nombre del Conductor</td>
<td>Apellidos del Conductor</td>
<td>Cédula del Propietario</td>
<td>Primer Nombre del Propietario</td>
<td>Segundo Nombre del Propietario</td>
<td>Apellidos del Propietario</td>



</tr>
<tr>
@foreach($vehiculos as $vehiculo)
<td>{{$vehiculo->id}}</td>
<td>{{$vehiculo->Placa}}</td>
<td>{{$vehiculo->color->Nombre_Color}}</td>
<td>{{$vehiculo->marca->Nombre_Marca}}</td>
<td>{{$vehiculo->tipo_vehiculo->Nombre_Tipo_Vehiculo}}</td>
<td>{{$vehiculo->conductor->Numero_Cedula}}</td>
<td>{{$vehiculo->conductor->Primer_Nombre}}</td>
<td>{{$vehiculo->conductor->Segundo_Nombre}}</td>
<td>{{$vehiculo->conductor->Apellidos}}</td>
<td>{{$vehiculo->propietario->Numero_Cedula}}</td>
<td>{{$vehiculo->propietario->Primer_Nombre}}</td>
<td>{{$vehiculo->propietario->Segundo_Nombre}}</td>
<td>{{$vehiculo->propietario->Apellidos}}</td>

@endforeach
</tr>





</table>









@endsection