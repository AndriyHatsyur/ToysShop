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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style_admin.css') }}" rel="stylesheet">

</head>
<body>
<div class="main">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="{{route('admin')}}">Адмін панель</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link " href="{{route('category.index')}}">Категорії<span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Features</a>
                    <a class="nav-item nav-link" href="#">Pricing</a>
                    <a class="nav-item nav-link " href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <main class=container-fluid>
        <div class="row justify-content-center">
            <div class="col-md-10">
                @yield('content')
            </div>

        </div>

    </main>
    <footer>
        <br><br><br>
    </footer>
</div>
<script>
    $(function () {
        $(' .navbar-nav a ').each(function () {
            var location = window.location.href.split('/')[4];
            var link = this.href.split('/')[4];

            location = location.split('?')[0];
            link = link.split('?')[0];

            if (location == link) {
                $(this).addClass('active');
            }
        });
    });
</script>

</body>
</html>
