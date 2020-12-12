@extends('layouts.acme.app')

@section('content')

<form action="{{route('color.store')}}" method="post">

@csrf
<h2 class="is-size-2 has-text-centered"> Crear una Ciudad</h2>

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Nombre del Color</label>

<input type="text" class="input" name="Nombre_Color" placeholder="Escribe la ciudad">

<input type="submit" class="button is-success mb-4 mt-4" value="Crear Ciudad">



</form>








@endsection