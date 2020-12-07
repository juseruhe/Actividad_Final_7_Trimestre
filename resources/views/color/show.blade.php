@extends('layouts.acme.app')

@section('content')

<table>
<tr>
<td>ID</td>
<td>Nombre del Color</td>

</tr>
<tr>
@foreach($colores as $color)
<td>{{$color->id}}</td>
<td>{{$color->Nombre_Color}}</td>

@endforeach
</tr>





</table>









@endsection