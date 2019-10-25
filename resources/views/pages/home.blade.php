@extends('layouts.app')
@section('content')
    <br>
    <h4>Товари зі знижкою</h4>
    <hr>
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                @include('layouts.components.product_item')
            @endforeach
        </div>
    </div>

@endsection