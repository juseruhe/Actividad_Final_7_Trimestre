@extends('layouts.acme.app')

@section('content')

<table>
<tr>
<td>ID</td>
<td>Nombre del Tipo de Vehículo</td>

</tr>
<tr>
@foreach($tipo_vehiculos as $tipo_vehiculo)
<td>{{$tipo_vehiculo->id}}</td>
<td>{{$tipo_vehiculo->Nombre_Tipo_Vehiculo}}</td>

@endforeach
</tr>





</table>









@endsection