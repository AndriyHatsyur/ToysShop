@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')
    <div class="container-fluid">
        <br>
        <h5>Дякуємо, ваше замовлення отримано, найближчим часом ми звами звяжемося!</h5>
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