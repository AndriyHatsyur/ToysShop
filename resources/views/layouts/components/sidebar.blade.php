<h3 class='sidebar-title' id="category-control">Категорії товарів  + </h3>
<ul class="list-group" id="list-category">
    @foreach($categorys as $category)
        @if(count($category->products) > 0)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a class="category-item" href="{{route('category', $category->slug)}}">{{$category->name}}</a>
            <span class="badge badge-m badge-pill">{{count($category->products)}}</span>
        </li>
        @endif
    @endforeach
</ul>
<br>
<h3 class='sidebar-title light' id="manufacturer-control">Виробники +</h3>
<ul class="list-group list-group-flush" id="list-manufacturer">

    @foreach($manufacturer as $manufacture)
        <li class="list-group-item" >
            <a href="{{route('manufacturer', $manufacture->manufacturer)}}">{{$manufacture->manufacturer}}</a>
        </li>
    @endforeach
</ul>

