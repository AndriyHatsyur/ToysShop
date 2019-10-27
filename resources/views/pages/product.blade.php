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
                        @if($product->sale) <small>Знижка {{$product->sale}} %</small>@endif
                        <p class="product-price">

                            @if($product->sale)

                                <s class="old-price">{{$product->price}} грн</s>
                                <span class="new-price"> {{$product->getPrice()}} грн</span>
                            @else
                                <span class="new-price"> {{$product->getPrice()}} грн</span>
                            @endif

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
                    @if(\App\Helpers\Cart::exist($product->id))
                        <button class="btn-lg btn-danger btn-buy" id="{{$product->id}}" data-id="{{$product->id}}" disabled>
                            <img src="{{ asset('img/cart.png') }}">
                            В кошику
                        </button>
                        @else
                        <button class="btn-lg btn-danger btn-buy" id="{{$product->id}}" data-id="{{$product->id}}">
                            <img src="{{ asset('img/cart.png') }}">
                            Купити
                        </button>
                        @endif


                </div>
            </div>
        </div>
        <br>
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

