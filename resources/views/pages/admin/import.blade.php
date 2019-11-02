@extends('layouts.app_admin')

@section('content')

    <form action="{{route('import')}}" enctype="multipart/form-data" method="post">
        <div class="form-group">
            @csrf
            <label>Не більше 1000 продуктів одним файлом</label>
            <input type="file" class="form-control-file" name="file">

        </div>
        <button type="submit" class="btn btn-success">Імпортувати</button>
    </form>


@endsection