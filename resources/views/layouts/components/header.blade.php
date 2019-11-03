<div class="info">
    <div class="container-fluid">
        <div class="row">
            <div class='col-md-6 col-sm-6'>
                Дитячий оптово-роздрібний інтернет-магазин Kentoys
            </div>
            <div class='col-md-3 col-sm-3'>
                тел: +380970567686
            </div>
            <div class='col-md-3 col-sm-3'>
                Email: info.playtoys.ua@gmail.com
            </div>
        </div>
    </div>

</div>
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="{{route('home')}}">KENTOYS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{route('home')}}">Головна </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('about')}}">Про нас</a>
            </li>

            <li class="nav-item">
                <a class="nav-link " href="{{route('payment')}}" >Оплата та доставка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route('contact')}}" tabindex="-1" aria-disabled="true">Контакти</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0" method="get" action="{{route('search')}}">
            <input class="form-control mr-sm-3" type="search" name="q" placeholder="Пошук" aria-label="Search" required>
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Знайти</button>
        </form>

        <a class="cart-a" href="{{route('cart.index')}}">
            <span class='cart-info' id="cart-count">{{\App\Helpers\Cart::total()}}</span>
            <img class='icon-img' src="{{ asset('img/cart.png') }}" alt="Кошик">

        </a>

    </div>

</nav>