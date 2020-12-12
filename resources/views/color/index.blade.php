@extends('layouts.acme.app')

@section('content')

<div class="columns"> 
<div class="column is-full">
<a class="button has-background-link has-text-white" href="{{route('color.create')}}">Crear Color</a>
</div>

</div>


<div class="columns">
<table class="table is-bordered column is-full mb-4" >
<tr class="has-background-link has-text-white">
<td>ID</td>
<td>Nombre del Color</td>
<td>Acciones</td>
</tr>
<tr>
@foreach($colores as $color)
<td>{{$color->id}}</td>
<td>{{$color->Nombre_Color}}</td>
<td>

<form action="{{route('color.destroy',$color->id)}}" method="post">

@csrf

@method('DELETE')

<a href="{{route('color.show',$color->id)}}" class="button is-info">Mostrar</a>
<a href="{{route('color.edit',$color->id)}}" class="button is-warning">Actualizar</a>
<button class="button is-danger">Eliminar</button>
</form>
</td>
</tr>
@endforeach






</table>


</div>


@endsection