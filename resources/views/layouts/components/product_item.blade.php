<div class="col-md-4 col-sm-6 product-card">
    <div class="card">
        <a href="">
            <img src="{{$product->image}}" class="card-img-top" alt="...">
        </a>
        <div class="card-body">
            <a href="{{route('product', $product->slug)}}">
                <h6 class="card-title">{{$product->name}}</h6>
            </a>
            <s class="old-price">{{$product->price}} грн</s>
            <p class="card-text">Ціна: {{$product->sale}} грн.</p>
            <button type="button" class="btn btn-buy">Купити</button>
        </div>


    </div>
</div>
