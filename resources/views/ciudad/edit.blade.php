@extends('layouts.acme.app')

@section('content')

@foreach($ciudades as $ciudad)
<form action="{{route('ciudad.update',$ciudad->id)}}" method="post">

@csrf
@method('PUT')
<h2 class="has-text-semibold is-size-2 has-text-centered"> Actualizar una Ciudad</h2>

<label  class="label  is-size-3 has-text-centered" class="has-text-semibold" for="Nombre de Ciudad"> Nombre de Ciudad</label>

<input type="text" class="input is-success" name="Nombre_Ciudad" value="{{$ciudad->Nombre_Ciudad}}" placeholder="Escribe la ciudad">

<input type="submit" class="button is-warning mb-5 mt-4" value="Actualizar Ciudad">



</form>






@endforeach




@endsection