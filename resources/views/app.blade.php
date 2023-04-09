<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kmz.ru - @yield('title')</title>
    <link rel="shortcut icon" href="/img/icons.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="/css/sign-in-up.css">
    <link rel="stylesheet" href="/css/fontello.css">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/item.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">


</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-expand  navbar-dark bg">
    <div class="container-fluid w-75">
        <a class="navbar-brand" href="{{route('home')}}"><img class="header-logo" src="/img/Ресурс%204.png" alt="logo"></a>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
                <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">О компании</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('new')}}">Новости</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('list')}}">Каталог</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('dealers')}}">Дилеры</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('location')}}">Контакты</a>
                </li>

            </ul>
        </div>
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
            <li class="nav-item dropdown">
                <a class=" dropdown-toggle nav-link" href="#" role="button" data-toggle="dropdown"
                   aria-expanded="false"><i class="icon-user"></i>Личный кабинет</a>
                <div class="dropdown-menu bg">
                    @auth()
                        <a class="nav-link" href="{{route('cart')}}"><i class="icon-basket"></i>Корзина</a>
                        <a class="nav-link" href="{{route('orders')}}"><i class="icon-shopping-bag"></i>Мои заказы</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('logout')}}" class="nav-link"><i class="icon-logout"></i>Выход</a>

                    @else
                        <a class="nav-link" href="{{route('login')}}"><i class="icon-login"></i>Войти</a>
                    @endauth

                </div>

            </li>

        </ul>
    </div>
</nav>
@yield('content')
<footer class="footer mt-auto bg">
    <nav class="navbar navbar-expand navbar-dark container-fluid w-75">
        <a class="nav-link" href="https://vk.com/paokmz"><i class="icon-vk"></i></a>
        <a class="nav-link" href="https://www.facebook.com/groups/paokmz/"><i class="icon-facebook"></i></a>
        <a class="nav-link" href="https://twitter.com/nXXbY0ywoV0Cfgf"><i class="icon-twitter"></i></a>
        <a class="nav-link" href="https://www.youtube.com/channel/UCe14rv3AjibiHNt11hzmcoQ?view_as=subscriber"><i
                class="icon-youtube"></i></a>
        <a class="nav-link" href="https://www.instagram.com/kurganmashzavod/"><i class="icon-instagram"></i></a>
    </nav>
</footer>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
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
            // alert(data.message);
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
