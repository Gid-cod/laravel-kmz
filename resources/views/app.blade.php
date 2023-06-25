<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kmz.ru - @yield('title')</title>
    <link rel="shortcut icon" href="/img/icons.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="/css/sign-in-up.css">
    <link rel="stylesheet" href="/css/fontello.css">
    <link rel="stylesheet" href="/css/catalog.css">
    <link rel="stylesheet" href="/css/item.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/preloade.css">


</head>
<body class="d-flex flex-column h-100">
<nav class="navbar navbar-expand-lg navbar-dark bg">

    <div class="container-fluid w-75">
        <a class="navbar-brand" href="{{route('home')}}"><img class="col" src="/img/Ресурс%204.png" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
                <li class="nav-item">
                    <a class="nav-link " href="{{route('report')}}">Отчёты по СОУТ</a>
                </li>
            </ul>
        </div>
        <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
            <li class="nav-item dropdown">
                <a class="dropdown-toggle nav-link" role="button" data-toggle="dropdown" aria-expanded="false">
                    @auth()
                        <div class="rounded-circle mr-1">
                            @if (Auth::user()->photo)
                                <img class="avatar" src="{{ asset('storage/photos/' . Auth::user()->photo) }}" alt="Фото профиля">
                            @endif </div> {{$user->name}} {{$user->surname}}

                    @else
                        <p class="m-0">Войти</p>
                    @endauth</a>
                <div class="dropdown-menu bg">
                    @auth()
                        <a href="{{route('profil')}}" class="nav-link"><i class="bi bi-person-vcard-fill" style="width: 20px"></i>Профиль</a>
                        <a class="nav-link" href="{{route('cart')}}"><i class="icon-basket"></i>Корзина <span class="badge badge-light ml-2">{{$finalCount}}</span></a>
                        <a class="nav-link" href="{{route('orders')}}"><i class="icon-shopping-bag"></i>Мои заказы</a>
                        <div class="dropdown-divider"></div>
                        <a href="{{route('logout')}}" class="nav-link"><i class="icon-logout"></i>Выход</a>

                    @else
                        <a class="nav-link text-success" href="{{route('login')}}"><i class="icon-login"></i>Войти</a>
                        <a class="nav-link text-primary" href="{{route('register')}}"><i class="icon-user-plus"></i>Зарегистрироваться</a>
                    @endauth

                </div>

            </li>

        </ul>


    </div>
</nav>
{{--<div id="preloader">--}}
{{--    <div class="loader">Loading...</div>--}}
{{--</div>--}}

@yield('content')
<footer class="footer mt-auto  bg">
    <div class="row m-0 w-100">
        <nav class="navbar container-fluid w-75 " style="align-items: normal">
            <div class="col align-items-center">
                <div class="card-body">
                    <img class="card-img-top" style="width: 170px" src="/img/footer_logo.png" alt="logo">
                    <p class="nav-link text-muted p-0 mb-0">© Все права защищены</p>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <h4 class="nav-link p-1 mb-1 text-white">НАВИГАЦИЯ</h4>
                    <a class="nav-link p-1" href="{{route('about')}}">О компании</a>
                    <a class="nav-link p-1" href="{{route('new')}}">Новости</a>
                    <a class="nav-link p-1" href="{{route('list')}}">Каталог</a>
                    <a class="nav-link p-1" href="{{route('dealers')}}">Дилеры</a>
                    <a class="nav-link p-1" href="{{route('location')}}">Контакты</a>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <h4 class="nav-link p-1 mb-1 text-white">КОНТАКТЫ</h4>
                    <p class="text-muted p-1 mb-0">наш адрес</p>
                    <p class="text-white p-1 mb-0">Курган, проспект Машиностроителей, 17, литЖ</p>
                    <p class="text-muted p-1 mb-0">режим работы</p>
                    <p class="text-white p-1 mb-0">пн-пт 8:00 до 18:00</p>
                    <p class="text-white p-1 mb-0">сб-вс выходной</p>

                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <h4 class="nav-link p-1 mb-0 "><a class="text-white" href="tel:+7 (3522) 47-19-99">+7 (3522)
                            47-19-99</a></h4>
                    <p class="text-muted p-1 mb-0">справочная служба</p>
                    <h4 class="nav-link p-1 mb-0 "><a class="text-white" href="tel:+7 (3522) 47-12-75">+7 (3522)
                            47-12-75</a></h4>
                    <p class="text-muted p-1 mb-0">Отдел кадров</p>
                    <h4 class="nav-link p-1 mb-0 text-white">мы в соц-сетях</h4>
                    <div class="row ">
                        <a class="nav-link" href="https://vk.com/paokmz"><i class="icon-vk"></i></a>
                        <a class="nav-link" href="https://www.facebook.com/groups/paokmz/"><i class="icon-facebook"></i></a>
                        <a class="nav-link" href="https://twitter.com/nXXbY0ywoV0Cfgf"><i class="icon-twitter"></i></a>
                        <a class="nav-link"
                           href="https://www.youtube.com/channel/UCe14rv3AjibiHNt11hzmcoQ?view_as=subscriber"><i
                                class="icon-youtube"></i></a>
                        <a class="nav-link" href="https://www.instagram.com/kurganmashzavod/"><i
                                class="icon-instagram"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</footer>
<script src="/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/inputcustom.js"></script>
{{--<script src="/js/bootstrap.bundle.min.js"></script>--}}

@stack('scripts')
<script>

    // window.setTimeout(function() {
    //     document.getElementById('preloader').style.display = 'none';
    // }, 2000);

    $(document).ready(function () {

        $(".tooltip-show").tooltip()


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
