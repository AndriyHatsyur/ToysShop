<h3 class='sidebar-title'>Категорії товарів</h3>
<ul class="list-group">
    @foreach($categorys as $category)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <a class="category-item" href="#">{{$category->name}}</a>
        <span class="badge badge-m badge-pill">{{count($category->products)}}</span>
    </li>
    @endforeach
</ul>
<br>
<h3 class='sidebar-title light'>Виробники</h3>
<ul class="list-group list-group-flush">
    <li class="list-group-item">
        <a href="#">Категорія 1</a>
    </li>
    <li class="list-group-item">
        <a href="#">Категорія 1</a>
    </li>
    <li class="list-group-item">
        <a href="#">Категорія 1</a>
    </li>
    <li class="list-group-item">
        <a href="#">Категорія 1</a>
    </li>
</ul>