@extends('layouts.acme.app')

@section('content')

<table>
<tr>
<td>ID</td>
<td>Nombre de la Ciudad</td>

</tr>
<tr>
@foreach($ciudades as $ciudad)
<td>{{$ciudad->id}}</td>
<td>{{$ciudad->Nombre_Ciudad}}</td>

@endforeach
</tr>





</table>









@endsection