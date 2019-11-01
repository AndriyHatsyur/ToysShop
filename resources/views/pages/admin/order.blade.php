@extends('layouts.app_admin')

@section('content')

    <h4>Замовлення № {{$order->id}}</h4>
    <hr>
    <table class="table table-bordered">
        <tbody>
        <tr>

            <td>Прізвище</td>
            <td>{{$order->last_name}}</td>
        </tr>
        <tr>


            <td>Ім'я</td>
            <td>{{$order->name}}</td>
        </tr>
        <tr>

            <td>Побатькові</td>
            <td>{{$order->surname}}</td>
        </tr>
        <tr>

            <td>Телефон</td>
            <td>{{$order->phone}}</td>
        </tr>
        <tr>

            <td>Email</td>
            <td>{{$order->email}}</td>
        </tr>
        <tr>

            <td>Область</td>
            <td>{{$order->region}}</td>
        </tr>
        <tr>

            <td>Населений пункт</td>
            <td>{{$order->town}}</td>
        </tr>
        <tr>

            <td>Відділення нової пошти</td>
            <td>{{$order->post}}</td>
        </tr>
        <tr>

            <td>Оплата</td>
            <td>{{$order->paid}}</td>
        </tr>
        <tr>

            <td>Кількість товарів</td>
            <td>{{$order->count}}</td>
        </tr>
        <tr>

            <td>Сума замовлення</td>
            <td>{{$order->sum}} грн</td>
        </tr>
        <td>Статус замовлення</td>
        <td>

            <div class="form-group">
                <label for="exampleFormControlSelect2">Статус</label>
                <select class="form-control" id="st_id" data-id="{{$order->id}}">
                    @foreach($statuses as $status)
                        <option value="{{$status->id}}"

                                @if($status->id == $order->status_id)
                                selected
                                @endif

                        >{{$status->name}}</option>
                    @endforeach
                </select>
            </div>

        </td>
        </tbody>
    </table>


    <h4>Товари:</h4>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Назва</th>
            <th scope="col">Кількість</th>
            <th scope="col">Ціна</th>
            <th scope="col">Артикул</th>
            <th scope="col">Зображення</th>
        </tr>
        </thead>
        <tbody>
        @foreach($order->products as $product)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td><a href="/product/{{$product->slug}}" >{{$product->name}}</a></td>
            <td>{{$product->count}}</td>
            <td>{{$product->price}} грн.</td>
            <td>{{$product->article}}</td>
            <td><img class="order-img" src="{{$product->image}}"></td>
        </tr>
        @endforeach
        </tbody>
    </table>

@endsection