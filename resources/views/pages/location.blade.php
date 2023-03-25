@extends('app')

@section('title', 'Где нас найти?')

@section('content')
    <div class="container-fluid w-85">
        <div class="addres">
            <h2>Свяжитесь с нами</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequuntur nobis dignissimos vitae ab rerum
                aliquam voluptas quod ut harum, voluptate distinctio voluptatum molestias ipsam doloribus deleniti
                officia?
                Ab, ipsum sed!</p>
        </div>
        <div class="map">
            <div style="position:relative;overflow:hidden;"><a
                    href="https://yandex.ru/maps/org/kurganskiy_mashinostroitelny_zavod/1114183939/?utm_medium=mapframe&utm_source=maps"
                    style="color:#eee;font-size:12px;position:absolute;top:0px;">Курганский машиностроительный
                    завод</a><a
                    href="https://yandex.ru/maps/53/kurgan/category/machine_building/184106628/?utm_medium=mapframe&utm_source=maps"
                    style="color:#eee;font-size:12px;position:absolute;top:14px;">Машиностроительный завод в
                    Кургане</a><a
                    href="https://yandex.ru/maps/53/kurgan/category/foundries/184106652/?utm_medium=mapframe&utm_source=maps"
                    style="color:#eee;font-size:12px;position:absolute;top:28px;">Литейное производство в
                    Кургане</a><iframe src="https://yandex.ru/map-widget/v1/-/CCUbmXq9OB" frameborder="1"
                                       allowfullscreen="true" style="position:relative;"></iframe></div>
        </div>

        <div class="contact">
            <div class="tel"> <img src="public/img/free-icon-consultant-1402122.png" alt=""> </div>
            <div class="block">
                <div class="block2">
                    <div class="reg">
                        <h3>Контакты ПАО"Курганмашзаавод"</h3>
                        <p>Справочная служба:</p><a href="tel:+7 (3522) 47-19-99">+7 (3522) 47-19-99</a>
                        <p>Отдел кадров:</p><a href="tel:+7 (3522) 47-12-75">+7 (3522) 47-12-75</a>
                        <p>email:<a href="mailto:rabota@kmz.ru">rabota@kmz.ru</a></p>
                    </div>

                </div>
            </div>
            <div class="block">
                <div class="block2">
                    <div class="reg">
                        <h3>Отдел продаж ООО «Курганмашзавод»</h3>
                        <p>email:<a href="mailto:sales@kmz.ru">sales@kmz.ru</a></p>
                        <h3>Юридический адрес</h3>
                        <p>Адрес:Россия, 640021, г. Курган,пр. Машиностроителей, 17, литер 1Ж.,</p>

                    </div>
                </div>
            </div>
            <div class="block">
                <div class="block2" style="width: 320px;">
                    <div class="reg">
                        <h3>Гарантийное и сервисное обслуживание</h3>
                        <p>Гарантийное обслуживание:</p> <a href="tel:+7 (3522) 47-18-76">+7 (3522) 47-18-76</a>
                        <p>email:<a href="mailto:kmz-service@mail.ru">kmz-service@mail.ru</a></p>
                        <p>Сервисное обслуживание:</p> <a href="tel:+7(912)-978-73-01">+7(912)-978-73-01</a>

                    </div>
                </div>
            </div>
        </div>

@endsection
