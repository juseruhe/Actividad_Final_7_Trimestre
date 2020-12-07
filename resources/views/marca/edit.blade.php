@extends('layouts.acme.app')

@section('content')

@foreach($marcas as $marca)
<form action="{{route('marca.update',$marca->id)}}" method="post">

@csrf
@method('PUT')
<h2> Actualizar una Marca</h2>

<label for="Nombre de Ciudad"> Nombre de Marca</label>

<input type="text" name="Nombre_Marca" value="{{$marca->Nombre_Marca}}" placeholder="Escribe la ciudad">

<input type="submit" value="Actualizar Marca">



</form>






@endforeach




@endsection