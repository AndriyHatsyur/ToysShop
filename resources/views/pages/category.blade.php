@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')
    <div class="container>">
        <h4>Категорія "{{$category->name}}"</h4>
        <br>
        <div class="row">
            @foreach($category->products as $product)

                @include('layouts.components.product_item')


            @endforeach
        </div>
    </div>

@endsection