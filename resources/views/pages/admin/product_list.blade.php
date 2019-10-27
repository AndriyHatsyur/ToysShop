@extends('layouts.app_admin')

@section('content')
    <a class="btn btn-success" href="{{ route('product.create') }}">Додати товар + </a>

    <br><br>
    <h4>Список товарів</h4>

    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Назва</th>
            <th scope="col">Ціна</th>
            <th scope="col">Категорія</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)

            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$product->name}}</td>
                @if($product->sale)
                    <td>{{$product->getPrice()}}</td>
                @else
                    <td>{{$product->price }}</td>
                @endif

                <td>{{$product->category->name}}</td>
                <td>
                    <a class="btn-sm btn-warning" href="{{ route('product.edit', $product->id) }}">Редагувати</a>
                    <form class="form-delete" method="post" action="{{ route('product.destroy', $product->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="btn-sm btn-danger">Видалити</button>
                    </form>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>


@endsection