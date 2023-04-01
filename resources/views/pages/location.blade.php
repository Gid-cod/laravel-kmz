@extends('app')

@section('title', 'Контакты')

@section('content')
    <main>
        <div style="position:relative;overflow:hidden;"><a
                href="https://yandex.ru/maps/org/kurganskiy_mashinostroitelny_zavod/1114183939/?utm_medium=mapframe&utm_source=maps"
                style="color:#eee;font-size:12px;position:absolute;top:0px;">Курганский машиностроительный
                завод</a><a
                href="https://yandex.ru/maps/53/kurgan/category/machine_building/184106628/?utm_medium=mapframe&utm_source=maps"
                style="color:#eee;font-size:12px;position:absolute;top:14px;">Машиностроительный завод в
                Кургане</a><a
                href="https://yandex.ru/maps/53/kurgan/category/foundries/184106652/?utm_medium=mapframe&utm_source=maps"
                style="color:#eee;font-size:12px;position:absolute;top:28px;">Литейное производство в
                Кургане</a>
            <iframe src="https://yandex.ru/map-widget/v1/-/CCUbmXq9OB" frameborder="1"
                    allowfullscreen="true" style="position:relative;"></iframe>
        </div>
    </main>
    <div class="container-fluid w-85">
        <div class="row">
            <div class="col shadow p-3 mb-5 bg rounded border-0">
                <h3 class="card-text text-white">Контактная информация </h3>
            </div>
        </div>
        <div class="row gap">

            <div class="card shadow p-3 mb-5 bg-white rounded border-0" style="width: 28rem;">
                <img src="public/img/free-icon-contact-3188213.png" class="card-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Контакты ПАО"Курганмашзаавод"</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Справочная служба:<a href="tel:+7 (3522) 47-19-99">+7 (3522)
                            47-19-99</a></li>
                    <li class="list-group-item">Отдел кадров:<a href="tel:+7 (3522) 47-12-75">+7 (3522) 47-12-75</a>
                    </li>
                    <li class="list-group-item">Вопросы по трудоустройству:<a
                            href="mailto:rabota@kmz.ru">rabota@kmz.ru</a></li>
                </ul>
                {{--                <div class="card-body">--}}
                {{--                    <h5 class="card-title">Юридический адрес ПАО"Курганмашзавод"</h5>--}}
                {{--                </div>--}}
                {{--                <ul class="list-group list-group-flush">--}}
                {{--                    <li class="list-group-item">Адрес: Россия, 640021, г. Курган,пр. Машиностроителей, 17, литер 1Ж.,</li>--}}
                {{--                    <li class="list-group-item"></li>--}}
                {{--                </ul>--}}
            </div>
            <div class="card shadow p-3 mb-5 bg-white rounded border-0" style="width: 29rem;">
                <img src="public/img/free-icon-repair-service-7967066.png" class="card-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Гарантийное и сервисное обслуживание</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Обслуживание по гарантии:<a href="tel:+7 (3522) 47-18-76">+7 (3522)
                            47-18-76</a></li>
                    <li class="list-group-item">Сервисное обслуживание:<a
                            href="tel:+7(912)-978-73-01">+7(912)-978-73-01</a></li>
                    <li class="list-group-item">Возникли проблемы:<a href="mailto:kmz-service@mail.ru">
                            kmz-service@mail.ru</a></li>

                </ul>
            </div>
            <div class="card shadow p-3 mb-5 bg-white rounded border-0" style="width: 28rem;">
                <img src="public/img/free-icon-boss-1281445.png" class="card-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Отдел продаж ПАО «Курганмашзавод»</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">email:<a href="mailto:sales@kmz.ru">sales@kmz.ru</a></li>
                    <li class="list-group-item">Московское подразделение:<a href="mailto:sales_msk@kmz.ru">sales_msk@kmz.ru</a>
                    </li>
                    <li class="list-group-item">Телефон отдела продаж:<a href="tel:+7 (3522) 471-888">+7 (3522)
                            471-888</a></li>
                    <li class="list-group-item">Отдел продаж в москве:<a href="tel:+7 (495) 198-15-72">+7 (495)
                            198-15-72</a></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
