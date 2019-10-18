@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')
    <div class="container">
        <h3>Оформлення замовлення</h3>
        <form class="order-form">
            <h5>Спосіб доставки:</h5>
            <div class="form-group">
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Облясть">

            </div>
            <div class="form-group">

                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Місто">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Відділення нової пошти">
            </div>
            <h5>Інформація про одержувача:</h5>

            <div class="form-group">

                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Прізвище">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Імя">
            </div>
            <div class="form-group">

                <input type="text" class="form-control" id="exampleInputPassword1" placeholder="По батькові">
            </div>
            <div class="form-group">

                <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email">
            </div>
            <div class="form-group">

                <input type="tel" class="form-control" id="exampleInputPassword1" placeholder="Телефон">
            </div>
            <h5>Спосіб оплати:</h5>
            <div class="form-group">
                <select class="form-control">
                    <option>Наложеним платижем</option>
                    <option>На карту</option>
                </select>
            </div>

            <button type="submit" class="btn btn-danger">Оформити замовлення</button>
        </form>

    </div>


@endsection