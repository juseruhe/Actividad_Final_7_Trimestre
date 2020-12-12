@extends('layouts.acme.app')

@section('content')

<form action="{{route('ciudad.store')}}" method="post" class="has-text-centered mb-4 mt-3 ">


@csrf
<h2 class="is-size-2 has-text-centered"> Crear una Ciudad</h2>

<div class="field">
<label for="Nombre de Ciudad" class="label is-size-3 "> Nombre de Ciudad</label>


<div class="control">
<input type="text" class="input is-success " name="Nombre_Ciudad" placeholder="Escribe la ciudad">
</div>

</div>
<input type="submit" class="button is-success " value="Crear Ciudad">

<a class="button has-background-grey has-text-white" href="{{route('ciudad.index')}}"> Volver a Mostrar Ciudades</a>

</form>








@endsection