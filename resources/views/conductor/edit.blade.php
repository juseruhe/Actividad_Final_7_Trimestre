@extends('layouts.acme.app')

@section('content')

@foreach($conductores as $conductor)
<form action="{{route('conductor.update',$conductor->id)}}" method="post">

@csrf
@method('PUT')
<h2 class="is-size-2 has-text-centered"> Actualizar un Conductor</h2>



<input type="hidden" name="id" value="{{$conductor->id}}" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Numero_Cedula"> Número Cédula</label>

<input class="input" type="text" name="Numero_Cedula" value="{{$conductor->Numero_Cedula}}" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad">Primer Nombre</label>

<input class="input" type="text is-size-4 has-text-centered" name="Primer_Nombre" value="{{$conductor->Primer_Nombre}}" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Segundo Nombre</label>

<input class="input" type="text" name="Segundo_Nombre" value="{{$conductor->Segundo_Nombre}}" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Apellidos</label>

<input class="input" type="text" name="Apellidos" value="{{$conductor->Apellidos}}" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Dirección</label>

<input class="input" type="text" name="Direccion" value="{{$conductor->Direccion}}" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Teléfono</label>

<input class="input" type="text" name="Telefono" value="{{$conductor->Direccion}}" placeholder="Escribe la ciudad">

<label  class="label is-size-4 has-text-centered" for="Nombre de Ciudad"> Ciudad </label>

<select name="Cuidad_id" class="select is-rounded input" >

<option value="{{$conductor->Ciudad_id}}">{{$conductor->ciudad->Nombre_Ciudad}}</option>

@foreach($ciudades as $ciudad)

<option value="{{$ciudad->id}}">{{$ciudad->Nombre_Ciudad}}</option>

@endforeach

</select>

<input type="submit" class="button is-warning mb-4 mt-4" value="Actualizar Conductor">



</form>






@endforeach




@endsection