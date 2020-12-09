@extends('layouts.acme.app')

@section('content')

@foreach($vehiculos as $vehiculo)
<form action="{{route('vehiculo.update',$vehiculo->id)}}" method="post">

@csrf
@method('PUT')
<h2> Actualizar un Vehículo</h2>

<label  class="label" for="Direccion"> Placa</label>

<input type="text" name="Placa" placeholder="Escribe la ciudad" value={{$vehiculo->Placa}}>

<label  class="label" for="Telefono"> Color</label>

<select name="Color_id">

<option value="{{$vehiculo->Color_id}}">{{$vehiculo->color->Nombre_Color}}</option>

@foreach($colores as $color)

<option value="{{$color->id}}">{{$color->Nombre_Color}}</option>

@endforeach

</select>

<label  class="label" for="Telefono"> Marca</label>

<select name="Marca_id">

<option value="{{$vehiculo->Marca_id}}">{{$vehiculo->marca->Nombre_Marca}}</option>

@foreach($marcas as $marca)

<option value="{{$marca->id}}">{{$marca->Nombre_Marca}}</option>

@endforeach

</select>

<label  class="label" for="Telefono"> Tipo de Vehículo</label>

<select name="Tipo_Vehiculo_id">

<option value="{{$vehiculo->Tipo_Vehiculo_id}}">{{$vehiculo->tipo_vehiculo
    ->Nombre_Tipo_Vehiculo}}
</option>

@foreach($tipo_vehiculos as $tipo_vehiculo)

<option value="{{$tipo_vehiculo->id}}">{{$tipo_vehiculo->Nombre_Tipo_Vehiculo}}</option>

@endforeach

</select>

<label  class="label" for="Telefono"> Cédula,Nombres y Apellidos del Conductor</label>

<select name="Conductor_id">

<option value="{{$vehiculo->Conductor_id}}">{{$vehiculo->conductor->Numero_Cedula
    ." ".$vehiculo->conductor->Primer_Nombre
    ." ".$vehiculo->conductor->Segundo_Nombre.
    " ".$vehiculo->conductor->Apellidos}}
</option>

@foreach($conductores as $conductor)

<option value="{{$conductor->id}}">{{$conductor->Numero_Cedula
    ." ".$conductor->Primer_Nombre
    ." ".$conductor->Segundo_Nombre.
    " ".$conductor->Apellidos}}
</option>

@endforeach

</select>

<label  class="label" for="Telefono"> Cédula del Propietario</label>

<select name="Propietario_id">

<option value="{{$vehiculo->Propietario_id}}">{{$vehiculo->propietario->Numero_Cedula
    ." ".$vehiculo->propietario->Primer_Nombre
    ." ".$vehiculo->propietario->Segundo_Nombre.
    " ".$vehiculo->propietario->Apellidos}}</option>


@foreach($propietarios as $propietario)

<option value="{{$propietario->id}}">{{$propietario->Numero_Cedula
    ." ".$propietario->Primer_Nombre
    ." ".$propietario->Segundo_Nombre.
    " ".$propietario->Apellidos}}</option>

@endforeach

</select>



<input type="submit" class="button is-warning" value="Actualizar Vehículo">



</form>






@endforeach




@endsection