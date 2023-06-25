@extends('admin.index')

@section('title' ,'Панель')

@section('content')
    <h1>Hello
        @auth()
            {{$user->name}} {{$user->surname}}{{$user->patronymic}}

        @endauth</h1>
@endsection
