<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Админ панель - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/item.css')}}">
    {{--
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">--}}
    {{--    <link rel="stylesheet" href="{{asset('css/styles.css')}}">--}}
</head>
<body class="container-fluid w-75">
<div class="btn-group mt-3 w-100 ">
    <a href="{{route('admin.categories.index')}}" class="btn btn-outline-primary">Категории</a>
    <a href="{{route('admin.items.index')}}" class="btn btn-outline-primary">Товары</a>
    <a href="{{route('admin.orders.index')}}" class="btn btn-outline-primary">Заказы</a>

</div>
@yield('content')

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@stack('scripts')
</body>
</html>
