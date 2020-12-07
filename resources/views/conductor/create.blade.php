@extends('layouts.acme.app')

@section('content')

<form action="{{route('conductor.store')}}" method="post">

@csrf
<h2> Crear un Propietario</h2>

<label for="Cédula"> Número de Cédula</label>

<input type="text" name="Numero_Cedula" placeholder="Escribe la Cédula">

<label for="nombre"> Primer Nombre</label>

<input type="text" name="Primer_Nombre" placeholder="Escribe la ciudad">

<label for="Nombre"> Segundo Nombre</label>

<input type="text" name="Segundo_Nombre" placeholder="Escribe la ciudad">

<label for="Apellidos"> Apellidos</label>

<input type="text" name="Apellidos" placeholder="Escribe la ciudad">

<label for="Direccion"> Direccion</label>

<input type="text" name="Direccion" placeholder="Escribe la ciudad">

<label for="Telefono"> Teléfono</label>

<input type="text" name="Telefono" placeholder="Escribe la ciudad">

<label for="Ciudad"> Ciudad:</label>

<select name="Ciudad_id" >
@foreach($ciudades as $ciudad)
<option value="{{$ciudad->id}}">{{$ciudad->Nombre_Ciudad}}</option>
@endforeach
</select>






<input type="submit" value="Crear Propietario">



</form>








@endsection