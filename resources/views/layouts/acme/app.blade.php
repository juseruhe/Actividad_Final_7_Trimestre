<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACME</title>
    <link rel="stylesheet" href="{{url('css/app.css')}}">
    
<body class="is-family-primary">
    

@include('layouts.acme.components.navbar')

@include('layouts.acme.components.sidebar')

<h1 class="is-size-2 has-text-centered mb-4 mt-4 has-text-weight-bold"> Compañia ACME</h1>


<div class="">
@yield('content')
</div>

@include('layouts.acme.components.footer')


<script src="{{url('js/app.js')}}"></script>

</body>
</html>