<div class="col-md-4 col-sm-6 product-card">
    <div class="card">
        <a href="{{route('product', $product->slug)}}">
            <img src="{{$product->image}}" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <a href="{{route('product', $product->slug)}}">
                <h6 class="card-title">{{$product->name}}</h6>
            </a>
            @if($product->sale)
                <s class="old-price">{{$product->price}} грн</s>
                <small>Знижка {{$product->sale }}%</small>
                <p class="card-text">Ціна: {{$product->getPrice()}} грн.</p>
            @else
                <p class="card-text">Ціна: {{$product->getPrice()}} грн.</p>
            @endif
            @if(\App\Helpers\Cart::exist($product->id))
                <button type="button" id="{{$product->id}}" class="btn btn-buy" data-id="{{$product->id}}" disabled>В
                    кошику
                </button>
            @else

                <button type="button" id="{{$product->id}}" class="btn btn-buy" data-id="{{$product->id}}">Купити
                </button>
            @endif

        </div>


    </div>
</div>
