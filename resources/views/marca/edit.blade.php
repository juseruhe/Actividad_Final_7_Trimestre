@extends('layouts.acme.app')

@section('content')

@foreach($marcas as $marca)
<form action="{{route('marca.update',$marca->id)}}" method="post">

@csrf
@method('PUT')
<h2 class="is-size-2 has-text-centered"> Actualizar una Marca</h2>

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Nombre de Marca</label>

<input type="text"  class="input" name="Nombre_Marca" value="{{$marca->Nombre_Marca}}" placeholder="Escribe la ciudad">

<input type="submit" class="button is-warning mb-4 mt-4" value="Actualizar Marca">



</form>






@endforeach




@endsection