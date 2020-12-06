@extends('layouts.acme.app')

@section('content')

<form action="{{route('ciudad.store')}}" method="post">

@csrf
<h2> Crear una Ciudad</h2>

<label for="Nombre de Ciudad"> Nombre de Ciudad</label>

<input type="text" name="Nombre_Ciudad" placeholder="Escribe la ciudad">

<input type="submit" value="Crear Ciudad">



</form>








@endsection