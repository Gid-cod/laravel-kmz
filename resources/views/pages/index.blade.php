@extends('app')

@section('title', 'Главная')

@section('content')
    <div class="container-ful w-85">
        <div class="bg-video-wrapper">
            <div class="cardt card_video bg-video">
                <div class="card-bg-video">
                    <video id="myVideo" autoplay="autoplay" muted="muted" loop="loop" playsinline=""
                           class="bg-video__preview">
                        <source
                            src="/video/Курганмашзавод%20-%20производство%20гражданской%20техники%20-%201080.mp4">
                    </video>
                </div>
                <div class="card-fg-video">
                    <div class="card__top">
                        О компании
                    </div>
                    <div class="card__title">Лучший производитель<br>в своей области<br>
                        <a href="{{route('about')}}" class="btn btn-primary">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid w-85">
        <div class="row align-items-center">
            <div class="col-6">
                <h3 class="mb-3">Продукция компании</h3>
            </div>
            <div class="col-6 text-right">
                <a class="mb-3 mr-1" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                    <i style="font-size: 25px" class="icon-angle-circled-left"></i>
                </a>
                <a class="mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                    <i style="font-size: 25px" class="icon-angle-circled-right"></i>
                </a>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" style="padding: 15px;">
                        <div class="carousel-item active" data-interval="10000">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="cart shadow bg-white rounded-lg-3 me-2">
                                        <img class="img-fluid w-100" alt="100%x280" src="/img/вездеход.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Вездеходы серии ТМ-140</h4>
                                            <p class="card-text">Машина обладает высокой маневренностью и выживаемостью
                                                даже на грунтах с низкой несущей способностью.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="cart shadow bg-white rounded-lg-3 me-2">
                                        <img class="img-fluid w-100" alt="100%x280" src="/img/pogrujic.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Мини погрузчики серии МКСМ</h4>
                                            <p class="card-text">Многоцелевая коммунально-строительная, машина
                                                предназначена для погрузки и перемещения грунта, планировки участков,
                                                уборки территории и дорог...</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="cart shadow bg-white rounded-lg-3 me-2">
                                        <img class="img-fluid w-100" alt="100%x280" src="/img/prizep.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Легковые прицепы КМЗ</h4>
                                            <p class="card-text">Прицеп – удобное решение для перевозки тяжелых, мало- и
                                                крупногабаритных грузов с помощью легкового автомобиля, и т.д.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item " data-interval="10000">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="cart shadow bg-white rounded-lg-3 me-2">
                                        <img class="img-fluid w-100" alt="100%x280"
                                             src="/img/Перспективные%20разработки.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Универсальные транспортные средства </h4>
                                            <p class="card-text">Курганмашзавод на базе универсального гусеничного
                                                шасси, не имеющего аналогов в стране и мире, производит в основном
                                                различную технику для лесной промышленности</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="cart shadow bg-white rounded-lg-3 me-2">
                                        <img class="img-fluid w-100" alt="100%x280" src="/img/metalurgia.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">кузнечно-литейное производство</h4>
                                            <p class="card-text">Специализация кузнечно-литейного производства это
                                                изготовление отливок, поковок, штамповок по чертежам заказчика.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="cart shadow bg-white rounded-lg-3 me-2">
                                        <img class="img-fluid w-100" alt="100%x280" src="/img/zapchasti.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Запчасти для техники КМЗ</h4>
                                            <p class="card-text">Различные запчасти для техники Курганмашзавод.<br>
                                                Мксм<br>Тм-140 и тд.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <main role="main">
            <div class="row">
                <div class="col blog-main">
                    <div class="blog-post">
                        <div class="d-flex align-items-center p-3 my-3 rounded shadow bg-white">
                            <i class="icon-dot-circled" style="font-size: 30px; color: #005cbf;"></i>
                            <div class="lh-100">
                                <h6 class="mb-0 text-dark lh-100">Актуальные новости</h6>
                            </div>

                        </div>
                        <div class="row">

                                @forelse($news as $news)
                                    <div class="col-md-6 ">
                                        <div
                                            class="row g-0 rounded-5  flex-md-row mb-4  position-relative hvr-grow">
                                            <div class="col p-4 d-flex flex-column position-static ">
                                                <strong
                                                    class="d-inline-block mb-2 badge badge-primary badge-pill text-bg-danger">{{$news->type->name}}</strong>
                                                <p class="fs-5 fw-bold">{{Str::limit($news->name, 50, '...')}}</p>

                                                <p class="card-text mb-auto">{{Str::limit($news->Short_description, 100, '...')}}</p>
                                                <div class="row align-items-end ">
                                                    <div class="col">
                                                        <a href="{{route('new',$news->id)}}" style="font-size: 0.8em;"
                                                           class="btn btn-outline-success stretched-link">Продолжить
                                                            чтение...</a>
                                                    </div>
                                                    <div class="col text-end mb-1 text-muted">
                                                        Добавлено: {{$news->created_at->diffForHumans()}}</div>

                                                </div>
                                            </div>
                                            <div class="col-auto d-none d-lg-block">
                                                <img src="{{$news->image}}" alt="" class="rounded-5 p-2" width="250">
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="alert alert-primary mt-3" role="alert">
                                        Новостей нет
                                    </div>
                                @endforelse

                        </div>
                        {{--                        <div class="my-3 p-3 bg-white rounded shadow-sm">--}}

                        {{--                                <div class="media text-muted pt-3">--}}
                        {{--                                    <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">--}}
                        {{--                                        <div class="d-flex justify-content-between align-items-center w-100">--}}
                        {{--                                            <h5 class="card-title"></h5>--}}


                        {{--                                        </div>--}}
                        {{--                                        <p class="card-text"></p>--}}
                        {{--                                        <span class="d-block"></span>--}}
                        {{--                                        <a href="" class="btn btn-outline-primary w-100 mt-2">Продолжить чтение...</a>--}}
                        {{--                                    </div>--}}
                        {{--                                </div>--}}

                        {{--                        </div>--}}
                        {{--                        <a href="{{route('new')}}" class="btn btn-outline-primary">Перейти ко всем новостям</a>--}}
                    </div>
                </div>

                {{--                <aside class="col-md-4 blog-sidebar">--}}
                {{--                    <div class="d-flex align-items-center p-3 my-3 rounded shadow bg-white">--}}
                {{--                        <i class="icon-camera" style="font-size: 30px; color: #005cbf;"></i>--}}
                {{--                        <div class="lh-100">--}}
                {{--                            <h6 class="mb-0 text-dark lh-100">Фоторепортаж</h6>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="hidden-xsd-none d-sm-block mt-3 text-center">--}}
                {{--                        <div class="jumbotron p-0 text-white rounded">--}}
                {{--                            <div class="px-0">--}}
                {{--                                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">--}}
                {{--                                    <ol class="carousel-indicators">--}}
                {{--                                        <li data-target="#carouselExampleCaptions" data-slide-to="0"--}}
                {{--                                            class="active"></li>--}}
                {{--                                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>--}}
                {{--                                        <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>--}}
                {{--                                    </ol>--}}
                {{--                                    <div class="carousel-inner">--}}
                {{--                                        <div class="carousel-item active">--}}
                {{--                                            <img class="img-fluid d-block img-center" src="/img/6.jpg" alt="btr">--}}
                {{--                                            <div class="carousel-caption d-none d-md-block">--}}
                {{--                                                <h6>🎉6 февраля Курганская область отметила свое 80-летие.</h6>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="carousel-item">--}}
                {{--                                            <img class="img-fluid d-block img-center" src="/img/sport.jpg" alt="btr">--}}
                {{--                                            <div class="carousel-caption d-none d-md-block">--}}
                {{--                                                <h6>23 февраля на «Молодецкие забавы»</h6>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                        <div class="carousel-item ">--}}
                {{--                                            <img class="img-fluid d-block img-center" src="/img/dip.jpg" alt="btr">--}}
                {{--                                            <div class="carousel-caption d-none d-md-block">--}}
                {{--                                                <h6>Редакция газеты «Машиностроитель» Курганмашзавода стала--}}
                {{--                                                    победителем конкурса...</h6>--}}
                {{--                                            </div>--}}
                {{--                                        </div>--}}
                {{--                                    </div>--}}

                {{--                                </div>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}

                {{--                    </div>--}}
                {{--                </aside><!-- /.blog-sidebar -->--}}

            </div><!-- /.row -->

        </main>
        <main role="main" class=" container p-3">

        </main>
    </div>
@endsection
