@extends('layouts.acme.app')

@section('content')

@foreach($ciudades as $ciudad)
<form action="{{route('ciudad.update',$ciudad->id)}}" method="post">

@csrf
@method('PUT')
<h2> Actualizar una Ciudad</h2>

<label for="Nombre de Ciudad"> Nombre de Ciudad</label>

<input type="text" name="Nombre_Ciudad" value="{{$ciudad->Nombre_Ciudad}}" placeholder="Escribe la ciudad">

<input type="submit" value="Actualizar Ciudad">



</form>






@endforeach




@endsection