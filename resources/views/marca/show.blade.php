@extends('layouts.acme.app')

@section('content')

<table class="table is-bordered mb-4">
<tr class="has-background-link has-text-white">
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