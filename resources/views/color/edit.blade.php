@extends('layouts.acme.app')

@section('content')

@foreach($colores as $color)
<form action="{{route('color.update',$color->id)}}" method="post">

@csrf
@method('PUT')
<h2 class="is-size-2 has-text-centered"> Actualizar una Color</h2>

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Nombre de Color</label>

<input type="text" class="input" name="Nombre_Color" value="{{$color->Nombre_Color}}" placeholder="Escribe la ciudad">

<input type="submit" class="button is-warning mb-4 mt-4" value="Actualizar Color">



</form>






@endforeach




@endsection