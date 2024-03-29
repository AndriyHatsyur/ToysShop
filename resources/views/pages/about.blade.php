@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')
    <div class="container pt-5" style="text-align: center">
        <h4>Оптово-роздрібний інтернет-магазин Kentoys</h4>
        <p>Оптово-роздрібний інтернет-магазин Kentoys

            У нашому магазині Ви зможе найти якісні товари для малечі, по супер вигідним цінам та умовам, а також товари
            для дитячої творчості, дитячі ігри та іграшки, товари для малюків, товари для логічного мислення та моторики
            рук.

            Ми пропомуєм великий вибір товарів виробництва України, Туреччини, а також Китаю.

            Продукція повністю відповідає европейським та українським екологічним нормам та сертифікатам якості.
            Наш магазин продає товари як роздрібним кліентам, так і оптовим!
        </p>
    </div>
    <br>
    <div class="container">
        <h4>Товари зі знижкою</h4>
        <hr>
        <div class="row">
            @foreach($products as $product)
                @include('layouts.components.product_item')
            @endforeach
        </div>

    </div>



@endsection