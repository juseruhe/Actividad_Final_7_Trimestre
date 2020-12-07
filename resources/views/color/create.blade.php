@extends('layouts.acme.app')

@section('content')

<form action="{{route('color.store')}}" method="post">

@csrf
<h2> Crear una Ciudad</h2>

<label for="Nombre de Ciudad"> Nombre del Color</label>

<input type="text" name="Nombre_Color" placeholder="Escribe la ciudad">

<input type="submit" value="Crear Ciudad">



</form>








@endsection