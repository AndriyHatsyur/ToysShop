@extends('layouts.app')
@section('title')
@endsection
@section('carusel')
@endsection

@section('content')
    <div class="container>">
        <h1>Категорія "{{$category->name}}"</h1>
        <br>
        <div class="row">
            @foreach($products as $product)

                @include('layouts.components.product_item')


            @endforeach
        </div>
    </div>
    {{ $products->links() }}
@endsection