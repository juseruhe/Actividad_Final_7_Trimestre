@extends('layouts.acme.app')

@section('content')

<table class="table is-bordered mb-4">
<tr class="has-background-link has-text-white ">
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