<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админ панель - @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>
<body class="container-fluid w-75">
<div class="btn-group mt-3 w-100 ">
    <a href="{{route('admin.categories.index')}}" class="btn btn-outline-primary">Категории</a>
    <a href="{{route('admin.items.index')}}" class="btn btn-outline-primary">Товары</a>
    <a href="{{route('admin.orders.index')}}" class="btn btn-outline-primary">Заказы</a>
    <a href="{{route('admin.news.index')}}" class="btn btn-outline-primary">Новости</a>

</div>
@yield('content')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@stack('scripts')
</body>
</html>
