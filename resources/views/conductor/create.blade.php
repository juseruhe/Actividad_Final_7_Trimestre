@extends('layouts.acme.app')

@section('content')

<form action="{{route('conductor.store')}}" method="post">

@csrf
<h2 class="is-size-2 has-text-centered"> Crear un Propietario</h2>

<label  class="label is-size-4 has-text-centered" for="Cédula"> Número de Cédula</label>

<input class="input" type="text" name="Numero_Cedula" placeholder="Escribe la Cédula">

<label  class="label is-size-4 has-text-centered" for="nombre"> Primer Nombre</label>

<input class="input" type="text" name="Primer_Nombre" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Nombre"> Segundo Nombre</label>

<input class="input" type="text" name="Segundo_Nombre" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Apellidos"> Apellidos</label>

<input class="input" type="text" name="Apellidos" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Direccion"> Direccion</label>

<input class="input" type="text" name="Direccion" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Telefono"> Teléfono</label>

<input class="input" type="text" name="Telefono" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Ciudad"> Ciudad:</label>

<select name="Ciudad_id" class="select is-rounded input" >
@foreach($ciudades as $ciudad)
<option  value="{{$ciudad->id}}">{{$ciudad->Nombre_Ciudad}}</option>
@endforeach
</select>






<input type="submit" class="button is-success mt-4 mb-4" value="Crear Propietario">



</form>








@endsection