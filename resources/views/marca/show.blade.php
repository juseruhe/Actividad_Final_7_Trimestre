@extends('layouts.acme.app')

@section('content')

<table class="table is-bordered">
<tr>
<td>ID</td>
<td>Nombre de la Marca</td>

</tr>
<tr>
@foreach($marcas as $marca)
<td>{{$marca->id}}</td>
<td>{{$marca->Nombre_Marca}}</td>

@endforeach
</tr>





</table>









@endsection