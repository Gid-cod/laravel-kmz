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
                            src="public/img/Курганмашзавод%20-%20производство%20гражданской%20техники%20-%201080.mp4">
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
                                        <img class="img-fluid" alt="100%x280" src="public/img/вездеход.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">Вездеходы серии ТМ-140</h4>
                                            <p class="card-text">Машина обладает высокой маневренностью и выживаемостью
                                                даже на грунтах с низкой несущей способностью.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="cart shadow bg-white rounded-lg-3 me-2">
                                        <img class="img-fluid" alt="100%x280" src="public/img/pogrujic.jpg">
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
                                        <img class="img-fluid" alt="100%x280" src="public/img/prizep.jpg">
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
                                        <img class="img-fluid" alt="100%x280"
                                             src="public/img/Перспективные%20разработки.jpg">
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
                                        <img class="img-fluid" alt="100%x280" src="public/img/metalurgia.jpg">
                                        <div class="card-body">
                                            <h4 class="card-title">кузнечно-литейное производство</h4>
                                            <p class="card-text">Специализация кузнечно-литейного производства это
                                                изготовление отливок, поковок, штамповок по чертежам заказчика.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="cart shadow bg-white rounded-lg-3 me-2">
                                        <img class="img-fluid" alt="100%x280" src="public/img/zapchasti.jpg">
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

        <div class="row">
            <div class="col-4 cart shadow bg-white me-2 m-3">
                <h3 class="px-4 py-2 "><i class="icon-dot-circled" style="font-size: 27px; color: red;"></i>Актуальные
                    новости</h3>
                @forelse($news as $news)
                    <div class="cart text-left py-2 px-4 mb-5 mb-lg-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <a href="#"><h3 class="small text-primary ">{{$news->name}}</h3></a>
                                <p class="small   m-0 text-muted">{{$news->Short_description}}</p>
                                <p class="card-text"><small
                                        class="">Добавлено: {{ date('d.m.Y',strtotime($news->created_at)) }}</small></p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="alert alert-primary mt-3" role="alert">
                        Новостей нет
                    </div>
                @endforelse
            </div>
            <div class="col m-3 hidden-xsd-none d-sm-block  text-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid d-block img-center" src="public/img/6.jpg" alt="btr">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>🎉6 февраля Курганская область отметила свое 80-летие.</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid d-block img-center" src="public/img/sport.jpg" alt="btr">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>23 февраля на «Молодецкие забавы»</h5>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="img-fluid d-block img-center" src="public/img/dip.jpg" alt="btr">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>✍Редакция газеты «Машиностроитель» Курганмашзавода по итогам прошлого года стала
                                    победителем конкурса Федерации профсоюзов Курганской области в номинации «Газеты,
                                    журналы и другие печатные издания».</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script>
        $('.carousel').carousel({
            interval: 2000
        })
    </script>
@endsection
