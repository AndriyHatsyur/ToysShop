@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')
    <div class="container product">
        <h1> <i class="far fa-bookmark"></i>Безопасный образовательный набор для проведения опытов</h1>

        <div class="row">
            <div class="col-md-6">
                <img src="{{asset('img/product/product.jpg')}}" class="card-img-top" alt="...">
            </div>
            <div class="col-md-6">
                <div class="price">
                    <div class="product-info">
                        <p class="product-price">
                            <s class="old-price">240 грн</s>
                            <span class="new-price"> 200 грн</span>
                        </p>
                        <p class="price-opt">
                            Оптова ціна: 190 грн
                        </p>
                        <p>
                            Виробник: Орион <br>
                            Розмір: 590 x 280 x 430 мм <br>
                            Виробник: Україна <br>
                            Тип: Пазл
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
            Також до складу гри додана гра-вікторина "Дорожні знаки", яка не тільки відкриє світ знань про основні дорожніх знаках, а й додасть інтригу у визначенні переможця.
            Грай та вивчай! <br>
            <br>
            Комплект містить: - 1 ігрове поле; <br>
            - 5 карток пішоходів; <br>
            - 23 картки для гри-вікторини; <br>
            - фішки; <br>
            - кубик; <br>

        </p>
        <h4>Схожі товари</h4>
        <hr>
        @include('layouts.components.product_slader')
    </div>

@endsection

