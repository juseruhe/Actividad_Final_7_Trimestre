@extends('layouts.acme.app')

@section('content')

<div class="columns">

<div class="column is-full">
<h2 class="is-size-3 has-text-centered"> Mostrar Ciudades </h2>
</div>
</div>

<div class="columns">

<div class="column is-full">
<a href="{{route('ciudad.create')}}">Crear Ciudad</a>

</div>

</div>

<div class="columns">

<table class="table is-bordered has-text-centered column is-full ">
    
<tr class="has-text-weight-semibold is-size-5 mt-4  " >

<td>ID</td>
<td>Nombre de la Ciudad</td>
<td>Acciones</td>
</tr>


<tr class="">
@foreach($ciudades as $ciudad)
<td class="">{{$ciudad->id}}</td>
<td class="">{{$ciudad->Nombre_Ciudad}}</td>

<td class="">


<form action="{{route('ciudad.destroy',$ciudad->id)}}" method="post">

@csrf

@method('DELETE')

<a href="{{route('ciudad.show',$ciudad->id)}}" class="button is-info">Mostrar</a>
<a href="{{route('ciudad.edit',$ciudad->id)}}" class="button is-warning">Actualizar</a>
<button class="button is-danger">Eliminar</button>
</form>
</td>
</tr>

@endforeach






</table>

</div>



@endsection

