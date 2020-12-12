@extends('layouts.acme.app')

@section('content')

<form action="{{route('propietario.store')}}" method="post" >

@csrf
<h2 class="is-size-2 has-text-centered"> Crear un Propietario</h2>

<label class="label is-size-4 has-text-centered"" for="Cédula"> Número de Cédula</label>

<input type="text " class="input" name="Numero_Cedula" placeholder="Escribe la Cédula">

<label class="label is-size-4 has-text-centered""  for="nombre"> Primer Nombre</label>

<input  type="text" class="input" name="Primer_Nombre" placeholder="Escribe la ciudad">

<label class="label is-size-4 has-text-centered""  for="Nombre"> Segundo Nombre</label>

<input type="text" class="input" name="Segundo_Nombre" placeholder="Escribe la ciudad">

<label class="label is-size-4 has-text-centered""  for="Apellidos"> Apellidos</label>

<input type="text" class="input" name="Apellidos" placeholder="Escribe la ciudad">

<label class="label is-size-4 has-text-centered""  for="Direccion"> Direccion</label>

<input type="text" class="input" name="Direccion" placeholder="Escribe la ciudad">

<label class="label is-size-4 has-text-centered""  for="Telefono"> Teléfono</label>

<input type="text" class="input" name="Telefono" placeholder="Escribe la ciudad">

<label class="label is-size-4 has-text-centered""  for="Ciudad"> Ciudad:</label>

<select name="Ciudad_id" class="select is-rounded is-focused input" >
@foreach($ciudades as $ciudad)
<option value="{{$ciudad->id}}">{{$ciudad->Nombre_Ciudad}}</option>
@endforeach
</select>






<input type="submit" class="button is-success mt-4 mb-3" value="Crear Propietario">

<a class="button has-background-grey has-text-white mt-4 mb-3" href="{{route('propietario.index')}}">Volver Mostrar Propietarios</a>


</form>








@endsection