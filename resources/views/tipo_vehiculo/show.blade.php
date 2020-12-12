@extends('layouts.acme.app')

@section('content')

<table class="table is-bordered mb-4">
<tr class="has-background-link has-text-white">
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