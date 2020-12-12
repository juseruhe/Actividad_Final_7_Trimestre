@extends('layouts.acme.app')

@section('content')

@foreach($propietarios as $propietario)
<form action="{{route('propietario.update',$propietario->id)}}" method="post">

@csrf
@method('PUT')
<h2 class="is-size-2 has-text-centered"> Actualizar un Propietario</h2>



<input type="hidden" name="id" value="{{$propietario->id}}" placeholder="Escribe la ciudad">

<label class="label has-text-centered is-size-4" for="Numero_Cedula"> Número Cédula</label>

<input type="text" class="input" name="Numero_Cedula" value="{{$propietario->Numero_Cedula}}" placeholder="Escribe la ciudad">

<label  class="label has-text-centered is-size-4" for="Nombre de Ciudad">Primer Nombre</label>

<input class="input" type="text" name="Primer_Nombre" value="{{$propietario->Primer_Nombre}}" placeholder="Escribe la ciudad">

<label  class="label has-text-centered is-size-4" for="Nombre de Ciudad"> Segundo Nombre</label>

<input class="input" type="text" name="Segundo_Nombre" value="{{$propietario->Segundo_Nombre}}" placeholder="Escribe la ciudad">

<label  class="label has-text-centered is-size-4" for="Nombre de Ciudad"> Apellidos</label>

<input class="input" type="text " name="Apellidos" value="{{$propietario->Apellidos}}" placeholder="Escribe la ciudad">

<label  class="label has-text-centered is-size-4" for="Nombre de Ciudad"> Dirección</label>

<input class="input" type="text" name="Direccion" value="{{$propietario->Direccion}}" placeholder="Escribe la ciudad">

<label  class="label has-text-centered is-size-4" for="Nombre de Ciudad"> Teléfono</label>

<input class="input" type="text" name="Telefono" value="{{$propietario->Direccion}}" placeholder="Escribe la ciudad">

<label  class="label has-text-centered is-size-4" for="Nombre de Ciudad"> Ciudad </label>

<select name="Cuidad_id" class="select is-rounded input" >

<option  value="{{$propietario->Ciudad_id}}">{{$propietario->ciudad->Nombre_Ciudad}}</option>

@foreach($ciudades as $ciudad)

<option class="input" value="{{$ciudad->id}}">{{$ciudad->Nombre_Ciudad}}</option>

@endforeach

</select>

<input type="submit" class="button is-warning mt-4 mb-4" value="Actualizar Propietario">



</form>






@endforeach




@endsection