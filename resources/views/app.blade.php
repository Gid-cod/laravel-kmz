<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kmz.ru - @yield('title')</title>

    <!-- Fonts -->
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"--}}
{{--          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">--}}
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/style2.css">
    <link rel="stylesheet" href="public/css/contact.css">
    <link rel="stylesheet" href="public/css/sign-in-up.css">
    <link rel="stylesheet" href="public/css/vmzoomer.css">
    <link rel="stylesheet" href="public/css/catalog.css">
    <link rel="stylesheet" href="{{asset('public/css/item.css')}}">
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">

</head>
<body>
<nav class="navbar navbar-expand  navbar-dark bg-primary">
    <div class="container-fluid w-75">
        <a class="navbar-brand" href="{{route('home')}}"><img class="header-logo" src="public/img/Ресурс%204.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">О нас</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('location')}}">Где нас найти?</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('list')}}">Каталог</a>
                </li>
                @auth()
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                           aria-expanded="false">
                            Ещё
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('cart')}}">Корзина</a></li>
                            <li><a class="dropdown-item" href="{{route('orders')}}">Мои заказы</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('logout')}}" class="nav-link">Выход</a>
                    </li>
                @else
                    <a class="nav-link" href="{{route('login')}}">Вход</a>
                    <a href="{{route('register')}}" class="nav-link">Регистрация</a>
                @endauth
            </ul>
        </div>
    </div>
</nav>


@yield('content')
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+"
        crossorigin="anonymous"></script>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
@stack('scripts')
<script>

    $(document).ready(function () {


        $(".liveToastBtn").click(function () {
            $('.toast').toast('show')
        });
        $(".close").click(function () {
            $('.toast').toast('hide')
        });

    });
    const addToCart = (itemId, count = 1, reload = false) => {
        $.post('/cart/' + itemId, {count}, data => {
            if (reload) location.reload();
        }).fail(err => alert('Ошибка при добавлении товара'))
    }

    $('.addToCart').click(function () {
        const itemId = $(this).data('id');
        addToCart(itemId)
    })


</script>
</body>
</html>
