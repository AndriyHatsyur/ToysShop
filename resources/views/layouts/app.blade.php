<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'KenToys') }}
        @section('title')
          -  Дитячий оптово-роздрібний інтернет-магазин
        @show
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
<div class="main">
    <header>
        @section('header')
            @include('layouts.components.header')
        @show
    </header>
    <main class=container-fluid>
        <div class='row'>
            <div class='col-md-3'>
                @section('sidebar')
                    @include('layouts.components.sidebar')
                @show
            </div>
            <div class='col-md-9'>
                @section('carusel')
                    @include('layouts.components.carusel')
                @show
                @yield('content')
            </div>
        </div>

    </main>
    <footer>
        @section('footer')
            @include('layouts.components.footer')
        @show
    </footer>
</div>


</body>
</html>
