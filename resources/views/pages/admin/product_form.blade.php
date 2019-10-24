@extends('layouts.app_admin')

@section('content')

    <h4>Додати новий продукт</h4>
    <form method="post" action="{{ route('product.store') }}">
        <div class="form-group">
            @csrf
            <label for="exampleInputEmail1">Назва продукту</label>
            <input type="text" name="name" class="form-control" placeholder="Назва продукту">

        </div>
        <div class="form-group">
            <label>Зображення</label>

            <input type="text" name="image" class="form-control" placeholder="Зображення">
        </div>
        <div class="form-group">
            <label>Ціна</label>

            <input type="text" name="price" class="form-control" placeholder="Ціна">
        </div>

        <div class="form-group">
            <label>Ціна опт</label>

            <input type="text" name="sale" class="form-control" placeholder="Ціна опт"></div>

        <div class="form-group">
            <label>Артикул</label>

            <input type="text" name="article" class="form-control" placeholder="Артикул">
        </div>

        <div class="form-group">
            <label>Виробник</label>

            <input type="text" name="manufacturer" class="form-control" placeholder="Виробник">
        </div>

        <div class="form-group">
            <label>Розмір</label>

            <input type="text" name="size" class="form-control" placeholder="Розмір">
        </div>
        <div class="form-group">
            <label>Країна виробництва</label>

            <input type="text" name="country" class="form-control" placeholder="Країна виробництва">
        </div>
        <div class="form-group">
            <label>Тип</label>

            <input type="text" name="type" class="form-control" placeholder="Тип">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="in_stock" class="form-check-input">
            <label class="form-check-label" for="exampleCheck1">Внаяності</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Категорія</label>
            <select  class="form-control" name="category_id">
                @foreach($categorys as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Опис товару</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>

        <button type="submit" class="btn btn-success">Додати</button>
    </form>

@endsection