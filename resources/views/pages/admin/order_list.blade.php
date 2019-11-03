@extends('layouts.app_admin')

@section('content')

    <br><br>
    <h4>Список замовлень</h4>


    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Приізвище Ім'я</th>
            <th scope="col">Наседений пункт</th>
            <th scope="col">Статус</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>


            @foreach ($orders as $order)

                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$order->name . " " . $order->last_name}}</td>


                    <td>{{$order->town}}</td>
                    <td>{{$order->status->name}}</td>
                    <td>
                        <a class="btn-sm btn-warning" href="{{route('admin-order', $order->id)}}">Детальніше</a>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    {{ $orders->links() }}
@endsection