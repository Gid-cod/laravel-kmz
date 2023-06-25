@extends('app')

@section('title','О компании')

@section('content')
    <div class="container mt-3 cart shadow-lg bg-white rounded-lg-3 me-2 mb-3">
        <div class="card-text mb-5">
            <h2 class="display-5 pl-3 mt-3 "><span class="" style="color: #005cbf">О компании. </span>Лучший производитель<br>в
                своей
                области<br></h2>
        </div>
        <div class="video card_video bg-video">
            <div class="card-bg-video">
                <video id="myVideo" autoplay="autoplay" muted="muted" loop="loop" playsinline=""
                       class="bg-video__preview">
                    <source
                        src="/video/Курганмашзавод%20-%20производство%20гражданской%20техники%20-%201080.mp4">
                </video>
            </div>
        </div>

        <div class="card-text mb-5">
            <hr>
            <p class="card-text pl-3"><i class="icon-dot-circled" style="font-size: 15px;color: #005cbf"></i>Коротко о нас</p>
            <h2 class="display-5 pl-3 mt-3 col-10">
                ПАО «Курганский машиностроительный завод» (КМЗ) <span class="" style="color: #005cbf">-единственное в России предприятие по производству
                боевых машин пехоты (БМП) и их модификаций </span> . С 2019 года входит в холдинг «Высокоточные
                комплексы»
                Госкорпорации Ростех.
            </h2>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="carb  bg-light  me-2 mb-3" style="max-width: 20rem;">
                    <div class="card-header">
                        <p style="font-size: 3rem">73 <span style="font-size: 20px" class="text-muted">Года</span></p>
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="card-footer">
                        <p class="card-text text-muted">ОПЫТ РАБОТЫ В ОТРАСЛИ</p>
                    </div>
                </div>
                <div class="carb bg-light mb-3" style="max-width: 20rem;">
                    <div class="card-header">
                        <p style="font-size: 3rem">2481<span style="font-size: 20px" class="text-muted">чел</span></p>
                    </div>
                    <div class="card-body">
                    </div>
                    <div class="card-footer">
                        <p class="card-text text-muted">НАГРАЖДЕНЫ НАГРАДАМИ СССР</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <h5 class="display-5 card-text  pl-4"><span style="color: #005cbf">ПАО «Курганмашзавод»</span><br>
                    является крупнейшим машиностроительным комплексом Зауралья, оснащенным
                    современным оборудованием, обеспечивающим полный производственный цикл от всех видов механической
                    обработки до сборки и комплексных испытаний готовой продукции.
                </h5>
                <hr>
                <h5 class="display-5 card-text  pl-4">
                    Освоено производство широкого ассортимента продукции<br>
                    <span style="color: #005cbf">гражданского назначения:</span><br>
                    - мини-погрузчики с бортовым поворотом;<br>
                    - гусеничные плавающие вездеходы;<br>
                    - автомобильные прицепы;<br>
                    - Универсальные транспортные средства<br>
                    - кузнечно-литейная продукция.
                </h5>
            </div>
        </div>
        <div class="card-text mb-5">
            <hr>
            <p class="card-text pl-3"><i class="icon-dot-circled" style="font-size: 15px; color: #005cbf"></i>Краткая история</p>
            <div class="  pl-3 mt-3 col-10">
                <div class="history"><h4 class="display-5 card-text  pl-4"><span
                            style="color: #005cbf">1 июля 1950 года</span><br> Курганскому
                        крановому заводу установлен государственный план. Свою первую продукцию — редуктор РМ-350
                        «Курганский завод тяжелых кранов» выпустил 6 июля 1950 года. Основной ассортимент завода
                        составляли
                        узлы и детали кранов, редукторы РМ-350, РМ-400, РМ-500, РМ-650, 5-тонные краны.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span
                            style="color: #005cbf">25 июня 1954 года</span><br> Курганский
                        завод кранового оборудования переименовывают в «Курганский машиностроительный завод», а уже
                        через
                        год КМЗ начинает производить Изделие 712 средний артиллерийский тягач АТ-С. Первые 2 АТС вышли
                        из
                        ворот завода 15 марта 1955 года.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span style="color: #005cbf">В 1967 году</span><br>
                        Осуществляет
                        серийный выпуск боевой машины пехоты БМП-1.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span style="color: #005cbf">В 1971 году</span><br>
                        За организацию
                        выпуска БМП коллектив завода указом Президиума Верховного Совета СССР награждён орденом
                        Трудового
                        Красного Знамени. 175 заводчан награждены орденами и медалями. Резьбошлифовщик инструментального
                        цеха В.С. Епишев стал Героем Социалистического Труда.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span style="color: #005cbf">В 1975 году</span><br>
                        Коллектив КМЗ
                        досрочно выполнил план по реализации продукции и, повысив производительность труда в 2 раза,
                        стал
                        победителем Всесоюзного социалистического соревнования. За успехи в выполнении заданий и
                        принятых
                        обязательств IX пятилетки 234 труженика завода награждены орденами и медалями. Электросварщик
                        Н.Т.
                        Атаманюк стал Героем Социалистического Труда.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span style="color: #005cbf">В феврале 1978 года</span><br>
                        Курганскому машиностроительному заводу присвоено имя В.И. Ленина.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span style="color: #005cbf">В 1980 году</span><br>
                        Осуществляет
                        серийный выпуск боевой машины пехоты БМП-2.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span style="color: #005cbf">В 1987 году</span><br>
                        завод перешел на
                        производство БМП-3, которая по сей день остается одной из лучших машин в мире в своем
                        3 классе.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span style="color: #005cbf">В 2016 году</span><br>
                        Курганмашзавод в
                        рамках государственного оборонного заказа начал поставлять Российской армии
                        модернизированные десантные машины – БМД-4М и БТР-МДМ.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span style="color: #005cbf">С 24 января 2019 года</span><br>
                        На
                        Курганмашзаводе изменена организационно-правовая форма — с ОАО на ПАО. Теперь полное фирменное
                        наименование Общества — Публичное акционерное общество «Курганский машиностроительный завод»,
                        сокращенное — ПАО «Курганмашзавод». В Единый государственный реестр юридических лиц внесены
                        соответствующие изменения.</h4></div>
                <div class="history"><h4 class="display-5 card-text  pl-4"><span style="color: #005cbf">21 февраля 2019 года</span><br>
                        Состоялась сделка по приобретению 74,5 % акций ПАО «Курганмашзавод». Покупателем акций выступило
                        АО
                        НПО «Высокоточные комплексы», входящее в состав ГК «Ростех». Таким образом, передача предприятий
                        военного дивизиона концерна «Тракторные заводы» в контур управления Госкорпорации «Ростех»
                        завершена.</h4></div>
            </div>
            <hr>
        </div>
        <div class="row mb-3">
            <div class="col-6">
                <h3 class="mb-3">Фоторепортаж</h3>
            </div>
            <div class="col-6 text-right"></div>
            <div class="col-12 col-md-4 col-lg-4 col-xl-4  hidden-xsd-none d-sm-block  text-center">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid d-block img-center" src="/img/proiz.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Кузнечно-литейное производство</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid d-block img-center" src="/img/kuznez.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Кузнечно-литейное производство</h5>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <img class="img-fluid d-block img-center" src="/img/meetal.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Кузнечно-литейное производство</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col  hidden-xsd-none d-sm-block">
                <div id="carousel-344543" class="carousel slide" data-ride="carousel">

                    <ol class="carousel-indicators bottom dark-indicators">
                        <li data-target="#carousel-344543" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-344543" data-slide-to="1" class=""></li>
                        <li data-target="#carousel-344543" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                            <img class="img-fluid img-center" src="/img/nosch.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Красоты вечернего Курганмашзавода</h5>
                            </div>
                        </div>
                        <div class="item left carousel-item">
                            <img class="img-fluid img-center" src="/img/nort.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Вечный огонь на территории Курганмашзавода</h5>
                            </div>
                        </div>
                        <div class="item next left carousel-item">
                            <img class="img-fluid img-center" src="/img/tryt.jpg" alt="">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Красоты вечернего Курганмашзавода</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            {{--            <div class="col-12 col-md-4 col-lg-4 col-xl-4  hidden-xsd-none d-sm-block  text-center">--}}
            {{--                <div id="carousel-233467" class="carousel slide">--}}
            {{--                    <ol class="carousel-indicators bottom dark-indicators">--}}
            {{--                        <li data-target="#carousel-233467" data-slide-to="0" class="active"></li>--}}
            {{--                        <li data-target="#carousel-233467" data-slide-to="1" class=""></li>--}}
            {{--                        <li data-target="#carousel-233467" data-slide-to="2" class=""></li>--}}
            {{--                    </ol>--}}
            {{--                    <div class="carousel-inner">--}}
            {{--                        <div class="item carousel-item active">--}}
            {{--                            <img class="img-fluid img-center" src="/img/mcsm.jpg" alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="item left carousel-item">--}}
            {{--                            <img class="img-fluid img-center" src="/img/mcsm1.jpg" alt="">--}}
            {{--                        </div>--}}
            {{--                        <div class="item next left carousel-item">--}}
            {{--                            <img class="img-fluid img-center" src="/img/mcsm2.jpg" alt="">--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
@endsection
