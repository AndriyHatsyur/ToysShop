@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')


    <form method="post">
        @csrf
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{asset('img/product/product.jpg')}}" class="card-img" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">Безопасный образовательный набор для проведения опытов</h5>
                        <p class="card-text">Ціна: 200 грн</p>
                        <p>Кількість:</p>
                        <div class="form-row">
                            <div class="col-2">
                                <input type="text" name="6767" class="form-control cart-control" value="1">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-1 delete-product">
                    <img class="icon-del" src="{{asset('img/delete-sign.png')}}" alt="Видалити">
                </div>
            </div>


        </div>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{asset('img/product/product.jpg')}}" class="card-img" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">Безопасный образовательный набор для проведения опытов</h5>
                        <p class="card-text">Ціна: 200 грн</p>
                        <p>Кількість:</p>
                        <div class="form-row">
                            <div class="col-2">
                                <input type="text" name="676547" class="form-control cart-control" value="1">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-1 delete-product">
                    <img class="icon-del" src="{{asset('img/delete-sign.png')}}">
                </div>
            </div>


        </div>
        <button class="btn-lg btn-danger btn-buy">Оформити замовлення</button>
    </form>
@endsection