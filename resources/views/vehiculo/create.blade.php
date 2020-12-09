@extends('layouts.acme.app')

@section('content')

<form action="{{route('vehiculo.store')}}" method="post">

@csrf
<h2> Crear un Vehículo</h2>

<label  class="label" for="Direccion"> Placa</label>

<input type="text" name="Placa" placeholder="Escribe la ciudad">

<label  class="label" for="Telefono"> Color</label>

<select class="select is-rounded" name="Color_id">

@foreach($colores as $color)

<option value="{{$color->id}}">{{$color->Nombre_Color}}</option>

@endforeach

</select>

<label   class="label" for="Telefono"> Marca</label>

<select class="select is-rounded" name="Marca_id">

@foreach($marcas as $marca)

<option value="{{$marca->id}}">{{$marca->Nombre_Marca}}</option>

@endforeach

</select>

<label  class="label" for="Telefono"> Tipo de Vehículo</label>

<select class="select is-rounded" name="Tipo_Vehiculo_id">

@foreach($tipo_vehiculos as $tipo_vehiculo)

<option value="{{$tipo_vehiculo->id}}">{{$tipo_vehiculo->Nombre_Tipo_Vehiculo}}</option>

@endforeach

</select>

<label  class="label" for="Telefono"> Cédula,Nombres y Apellidos del Conductor</label>

<select class="select is-rounded" name="Conductor_id">

@foreach($conductores as $conductor)

<option value="{{$conductor->id}}">{{$conductor->Numero_Cedula
    ." ".$conductor->Primer_Nombre
    ." ".$conductor->Segundo_Nombre.
    " ".$conductor->Apellidos}}
</option>

@endforeach

</select>

<label  class="label" for="Telefono"> Cédula del Propietario</label>

<select class="select is-rounded" name="Propietario_id">

@foreach($propietarios as $propietario)

<option value="{{$propietario->id}}">{{$propietario->Numero_Cedula
    ." ".$propietario->Primer_Nombre
    ." ".$propietario->Segundo_Nombre.
    " ".$propietario->Apellidos}}</option>

@endforeach

</select>











<input type="submit" class="button is-success" value="Crear Propietario">



</form>








@endsection