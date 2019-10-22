@extends('layouts.app_admin')

@section('content')
    <a class="btn btn-success" href="{{ route('category.create') }}">Cтворити категорію + </a>

    <br><br>
    <h4>Список категорій</h4>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Назва</th>
            <th scope="col">Посилання</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach ($categorys as $category)

            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>
                    <a class="btn-sm btn-warning" href="{{ route('category.edit', $category->id) }}">Редагувати</a>
                    <form class="form-delete" method="post" action="{{ route('category.destroy', $category->id) }}">
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