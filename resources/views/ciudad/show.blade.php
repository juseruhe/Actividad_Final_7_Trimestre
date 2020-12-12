@extends('layouts.acme.app')

@section('content')

<table class="table is-bordered has-text-centered mb-4 is-size-4">
<tr>
<td>ID</td>
<td>Nombre de la Ciudad</td>

</tr>
<tr>
@foreach($ciudades as $ciudad)
<td>{{$ciudad->id}}</td>
<td>{{$ciudad->Nombre_Ciudad}}</td>
</tr>
@endforeach






</table>



<a class="button has-background-grey has-text-white mb-4" href="{{route('ciudad.index')}}">Volver Mostrar Ciudades</a>





@endsection