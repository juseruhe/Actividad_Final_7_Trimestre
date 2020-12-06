<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACME</title>
    <link rel="stylesheet" href="{{url('css.app.css')}}">
    
</head>
<body>
    

@include('layouts.acme.components.navbar')

<h1> Bienvenido a la Compañia ACME</h1>

 @include('layouts.acme.components.sidebar')

<div>
@yield('content')
</div>

@include('layouts.acme.components.footer')
</body>
</html>