@extends('layouts.app_admin')

@section('content')

    <h4>Створити нову категорію</h4>
    <form method="post" action="{{ route('category.store') }}">
        <div class="form-group">
            @csrf
            <input type="text" name="name" class="form-control"  placeholder="Введіть категорію">

        </div>

        <button type="submit" class="btn btn-success">Створити</button>
    </form>

@endsection