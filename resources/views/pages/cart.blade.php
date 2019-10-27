@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')
    @if($cart)
    @foreach($cart as $product)

        <div class="card mb-3" id="cart-card{{$product[0]->id}}">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="{{$product[0]->image}}" class="card-img" alt="...">
                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <h5 class="card-title">{{$product[0]->name}}</h5>
                        <p class="card-text">Ціна: {{$product[0]->getPrice()}} грн </p>
                        <p class="card-text">Сума:
                            <span id="p-sum{{$product[0]->id}}">
                                {{$product[0]->getPrice() * $product[0]->count}}
                            </span> грн </p>
                        <p>Кількість:</p>
                        <div class="form-row">
                            <div class="col-2">
                                <input type="text" data-id="{{$product[0]->id}}" class="form-control cart-control"
                                       value="{{$product[0]->count}}">

                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-1 delete-product" data-id="{{$product[0]->id}}">
                    <img class="icon-del" src="{{asset('img/delete-sign.png')}}" alt="Видалити">
                </div>
            </div>


        </div>

    @endforeach
    <h5>Кількість товарів: <span id="total">{{\App\Helpers\Cart::total()}}</span></h5>
    <h5>Загальна сума замовлення <span id="sum">{{\App\Helpers\Cart::sum()}}</span></h5>
    <br>
    <a href="{{route('order')}}" class="btn-lg btn-danger btn-order">Оформити замовлення</a>
    <br><br>
    @else
        <br>
        <h4>Кошик порожній</h4>

    @endif


@endsection

