@extends('layouts.acme.app')

@section('content')

<form action="{{route('ciudad.store')}}" method="post">


@csrf
<h2 class="is-size-3 has-text-centered"> Crear una Ciudad</h2>

<div class="field">
<label for="Nombre de Ciudad" class="label"> Nombre de Ciudad</label>


<div class="control">
<input type="text" class="input is-success " name="Nombre_Ciudad" placeholder="Escribe la ciudad">
</div>

</div>
<input type="submit" class="button is-success " value="Crear Ciudad">



</form>








@endsection