<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>TransVentas Guatemala</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Ionic icons -->
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    @yield('styles')

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>

<body>

<div id="app">    

@if (session('estado'))
<div class="alert alert-primary" role="alert">
    {{ session('estado') }}
</div>
@endif

{{-- Seccion header --}}
@include('inicio.partials.header')

{{-- Seccion para el contenido de la pagina --}}
    @yield('content')

{{-- Seccion del footer --}}
@include('inicio.partials.footer')

</div>

@yield('scripts')
<script src="https://kit.fontawesome.com/504cecf7a8.js" crossorigin="anonymous"></script>


</body>

</html>
