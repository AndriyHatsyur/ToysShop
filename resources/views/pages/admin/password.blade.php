@extends('layouts.app_admin')

@section('content')
    <h4>Змінити пароль</h4>
    @isset($message['success'])

        <div class="alert alert-success" role="alert">
           {{$message['success']}}
        </div>

    @endisset

    @isset($message['error'])

        <div class="alert alert-danger" role="alert">
            {{$message['error']}}
        </div>

    @endisset
    <form action="{{route('password')}}" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Старий пароль</label>
            <input type="password" name="old_password" class="form-control" placeholder="Старий пароль">
            @csrf
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Новий пароль</label>
            <input type="password" name="new_password" class="form-control" placeholder="Новий пароль">

        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Новий пароль</label>
            <input type="password" name="new_password_repeat" class="form-control" placeholder="Новий пароль">

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection