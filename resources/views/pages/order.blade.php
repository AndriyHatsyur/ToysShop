@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')
    <div class="container">
        <h3>Оформлення замовлення</h3>
        <form class="order-form" method="post" action="{{route('order-create')}}">
            @csrf
            <h5>Спосіб доставки:</h5>
            <div class="form-group">
                <input type="text" class="form-control" name="region" placeholder="Облясть">

            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="town" placeholder="Місто">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="post" placeholder="Відділення нової пошти">
            </div>
            <h5>Інформація про одержувача:</h5>

            <div class="form-group">

                <input type="text" class="form-control" name="last_name" placeholder="Прізвище">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="name" placeholder="Імя">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" name="surname" placeholder="По батькові">
            </div>
            <div class="form-group">

                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">

                <input type="tel" class="form-control" name="phone" placeholder="Телефон">
            </div>
            <h5>Спосіб оплати:</h5>
            <div class="form-group">
                <select class="form-control" name="paid">
                    <option value="Наложеним платижем">Наложеним платижем</option>
                    <option value="На карту">На карту</option>
                </select>
            </div>

            <button type="submit" class="btn btn-danger">Оформити замовлення</button>
        </form>

    </div>


@endsection