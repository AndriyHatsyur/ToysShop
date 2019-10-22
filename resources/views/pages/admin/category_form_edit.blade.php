@extends('layouts.app_admin')

@section('content')
    <h4>Редагувати категорію "{{$category->name}}"</h4>
    <form method="post" action="{{ route('category.update', $category->id) }}">
        <div class="form-group">
            @csrf
            @method('PUT')
            <input type="text" name="name" class="form-control"  value="{{$category->name}}">

        </div>

        <button type="submit" class="btn btn-success">Зберегти</button>
    </form>

@endsection