@extends('layouts.app_admin')

@section('content')

    <h4>Редагувати продутк "{{$product->name}}"</h4>
    <form method="post" action="{{ route('product.update', $product->id) }}">
        <div class="form-group">
            @csrf
            @method('PUT')
            <label for="exampleInputEmail1">Назва продукту</label>
            <input type="text" name="name" class="form-control" placeholder="Назва продукту" value="{{$product->name}}">

        </div>
        <div class="form-group">
            <label>Зображення</label>
            <input type="text" name="image" class="form-control" placeholder="Зображення" value="{{$product->image}}">
        </div>
        <div class="form-group">
            <label>Ціна</label>
            <input type="text" name="price" class="form-control" placeholder="Ціна" value="{{$product->price}}">
        </div>

        <div class="form-group">
            <label>Ціна опт</label>
            <input type="text" name="sale" class="form-control" placeholder="Ціна опт" value="{{$product->sale}}">
        </div>

        <div class="form-group">
            <label>Артикул</label>
            <input type="text" name="article" class="form-control" placeholder="Артикул" value="{{$product->article}}">
        </div>

        <div class="form-group">
            <label>Виробник</label>
            <input type="text" name="manufacturer" class="form-control" placeholder="Виробник"
                   value="{{$product->manufacturer}}">
        </div>

        <div class="form-group">
            <label>Розмір</label>
            <input type="text" name="size" class="form-control" placeholder="Розмір" value="{{$product->size}}">
        </div>
        <div class="form-group">
            <label>Країна виробництва</label>
            <input type="text" name="country" class="form-control" placeholder="Країна виробництва"
                   value="{{$product->country}}">
        </div>
        <div class="form-group">
            <label>Тип</label>
            <input type="text" name="type" class="form-control" placeholder="Тип" value="{{$product->type}}">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" name="in_stock" class="form-check-input"
                   @if($product->in_stock)
                        checked
                    @endif
            >
            <label class="form-check-label" for="exampleCheck1">Внаяності</label>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect2">Категорія</label>
            <select class="form-control" name="category_id">
                @foreach($categorys as $category)
                    <option value="{{$category->id}}"
                            @if($product->category->id == $category->id)
                            selected
                            @endif
                    >{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Опис товару</label>
            <textarea name="description" class="form-control" rows="3">{{$product->description}}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Редагувати</button>
    </form>

@endsection