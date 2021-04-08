<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    @yield('styles')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="{{ asset('css/estilo.css') }}" rel="stylesheet">


</head>

<body>

    @if (session('estado'))
        <div class="alert alert-primary" role="alert">
            {{ session('estado') }}
        </div>
    @endif

    <div id="app">

        <section class="bg-dark pt-5 fixed-top">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
                <div class="container pt-3">
                    <a class="navbar-brand mt-3" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">

                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                          <div class="group">
                                            <a class="dropdown-item" href="{{ route('admin') }}">Admin</a>
                                           </div>


                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>


                                    </div>
                                </li>


                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
        </section>

        <section class="bg-danger fixed-top">
            <div class="container">
                <div class="row top-bar" style="padding-bottom: 3px">
                    <div class="col text-left">
                        <span class="text-white">
                            <i class="fab fa-facebook"></i>
                        </span>
                        <span class="text-white">
                            <i class="fab fa-youtube"></i>
                        </span>
                        <span class="text-white">
                            <i class="fab fa-twitter"></i>
                        </span>
                        <span class="text-white">
                            <i class="fab fa-skype"></i>
                        </span>
                    </div>
                    <div class="col text-right">
                        <span class="text-white">
                            <i class="fas fa-mobile-alt"></i>
                            +5467878094
                        </span>
                        <span class="text-white">
                            |
                        </span>
                        <span class="text-white">
                            <i class="far fa-envelope-open"></i>
                            transventas@gmail.com
                        </span>
                    </div>
                </div>
            </div>
        </section>


        <main>
            @yield('content')
        </main>

    </div>
    @yield('scripts')
    <script src="https://kit.fontawesome.com/504cecf7a8.js" crossorigin="anonymous"></script>

</body>

</html>
