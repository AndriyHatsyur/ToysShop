@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')
    <div class="container product">
        <h1> {{$product->name}}</h1>

        <div class="row">
            <div class="col-md-6">
                <img src="{{$product->image}}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-6">
                <div class="price">
                    <div class="product-info">
                        <p class="product-price">
                            <s class="old-price">{{$product->price}} грн</s>
                            <span class="new-price"> {{$product->sale}} грн</span>
                        </p>
                        <p class="price-opt">
                            Оптова ціна: 190 грн
                        </p>
                        <p>
                            Виробник: {{$product->manufacturer}} <br>
                            Розмір: {{$product->size}} <br>
                            Країна виробник: {{$product->country}} <br>
                            Тип: {{$product->type}}
                        </p>
                    </div>
                    <button  class="btn-lg btn-danger btn-buy" >
                        <img  src="{{ asset('img/cart.png') }}">
                        Купити</button>

                </div>
            </div>
        </div><br>
        <h4>Додатковий опис</h4>
        <hr>
        <p>
            {{$product->description}}

        </p>
        <h4>Схожі товари</h4>
        <hr>
        @include('layouts.components.product_item')
    </div>

@endsection

