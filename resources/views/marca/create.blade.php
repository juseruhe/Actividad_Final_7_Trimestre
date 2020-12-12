@extends('layouts.acme.app')

@section('content')

<form action="{{route('marca.store')}}" method="post">

@csrf
<h2  class="is-size-2 has-text-centered"> Crear una Marca</h2>

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Nombre del Marca</label>

<input type="text"  class="input" name="Nombre_Marca" placeholder="Escribe la ciudad">

<input type="submit" class="button is-success mb-4 mt-4" value="Crear Marca">



</form>








@endsection