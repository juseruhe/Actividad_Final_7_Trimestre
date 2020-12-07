@extends('layouts.acme.app')

@section('content')

@foreach($colores as $color)
<form action="{{route('color.update',$color->id)}}" method="post">

@csrf
@method('PUT')
<h2> Actualizar una Color</h2>

<label for="Nombre de Ciudad"> Nombre de Color</label>

<input type="text" name="Nombre_Color" value="{{$color->Nombre_Color}}" placeholder="Escribe la ciudad">

<input type="submit" value="Actualizar Color">



</form>






@endforeach




@endsection