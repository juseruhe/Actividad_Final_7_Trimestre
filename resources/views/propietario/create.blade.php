@extends('layouts.acme.app')

@section('content')

<form action="{{route('propietario.store')}}" method="post">

@csrf
<h2> Crear un Propietario</h2>

<label class="label" for="Cédula"> Número de Cédula</label>

<input type="text" name="Numero_Cedula" placeholder="Escribe la Cédula">

<label class="label"  for="nombre"> Primer Nombre</label>

<input  type="text" name="Primer_Nombre" placeholder="Escribe la ciudad">

<label class="label"  for="Nombre"> Segundo Nombre</label>

<input type="text" name="Segundo_Nombre" placeholder="Escribe la ciudad">

<label class="label"  for="Apellidos"> Apellidos</label>

<input type="text" name="Apellidos" placeholder="Escribe la ciudad">

<label class="label"  for="Direccion"> Direccion</label>

<input type="text" name="Direccion" placeholder="Escribe la ciudad">

<label class="label"  for="Telefono"> Teléfono</label>

<input type="text" name="Telefono" placeholder="Escribe la ciudad">

<label class="label"  for="Ciudad"> Ciudad:</label>

<select name="Ciudad_id" class="select is-rounded is-focused" >
@foreach($ciudades as $ciudad)
<option value="{{$ciudad->id}}">{{$ciudad->Nombre_Ciudad}}</option>
@endforeach
</select>






<input type="submit" class="button is-success" value="Crear Propietario">



</form>








@endsection