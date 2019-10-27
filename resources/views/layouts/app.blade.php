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
                <div  id="content">
                    @yield('content')
                </div>

            </div>
        </div>

    </main>
    <footer>
        @section('footer')
            @include('layouts.components.footer')
        @show
    </footer>
</div>
<script>
    $(function () {
        $(' .navbar-nav a ').each(function () {
            var location = window.location.href.split('/')[3];
            var link = this.href.split('/')[3];
            location = location.split('?')[0];
            link = link.split('?')[0];

            if(location == link) {
                $(this).addClass('active');
            }
        });
    });
</script>

<script>
    $(".btn-buy").click(
        function() {
            var product_id = $( this ).data('id');
            var data = {'id': product_id }
            $('.btn-buy').blur();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/cart',
                type: "POST",
                data: data,
                cache: false,
                success: function (data){

                   $('#cart-count').text(data);

                   $("#" + product_id).attr('disabled', true);
                    $("#" + product_id).text('В кошику');


                },
                error: function () {
                    alert('Error ');
                }
            });
        }
    );
</script>

<script>
    $(".cart-control").change(
        function() {
            var product_id = $( this ).data('id');
            var count = $( this ).val();

            var data = {'id': product_id,'count': count ,'_method': 'PUT' }

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/cart/update',
                type: "POST",
                data: data,
                cache: false,
                success: function (data){

                    $("#sum").text(data.sum);
                    $("#total").text(data.total);
                    $('#cart-count').text(data.total);
                    $("#p-sum" + data.id).text((data.count * data.price));


                },
                error: function () {
                    alert('Error ');
                }
            });
        }
    );
</script>

<script>
    $(".delete-product").click(
        function() {
            var product_id = $( this ).data('id');
            var data = {'id': product_id , '_method': 'DELETE'}

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url: '/cart/delete',
                type: "POST",
                data: data,
                cache: false,
                success: function (data){

                    if (data.total > 0){

                        $("#sum").text(data.sum);
                        $("#total").text(data.total);
                        $('#cart-count').text(data.total);

                        $('#cart-card'+product_id).remove();

                    } else {
                        $('#cart-card'+product_id).remove();
                        $('#cart-count').text(data.total);
                        $('#content').html("<br>\n" +
                            "        <h4>Кошик порожній</h4>");
                    }

                },
                error: function () {
                    alert('Error ');
                }
            });
        }
    );
</script>


</body>
</html>
