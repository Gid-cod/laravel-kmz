@extends('app')

@section('title', 'Дилеры компании')
@section('content')
    <div class="container-fluid w-85 mt-3">
        <div class="row gap">
            <div class="col-3 ">

                <div class="list-group sticky-top">
                    <h4 class="card-title">Дилеры</h4>
                    <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"
                       type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                       aria-controls="collapseOne">Курган<span class="badge badge-primary badge-pill">6</span></a>
                    <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"
                       type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
                       aria-controls="collapseOne">Москва<span class="badge badge-primary badge-pill">5</span></a>
                    <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"
                       type="button" data-toggle="collapse" data-target="#collapse3" aria-expanded="true"
                       aria-controls="collapse3">Челябинск<span class="badge badge-primary badge-pill">3</span></a>
                    <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"
                       type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="true"
                       aria-controls="collapse4">Киров<span class="badge badge-primary badge-pill">2</span></a>
                    <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"
                       type="button" data-toggle="collapse" data-target="#collapse5" aria-expanded="true"
                       aria-controls="collapse5">Екатеринбург<span class="badge badge-primary badge-pill">2</span></a>
                    <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"
                       type="button" data-toggle="collapse" data-target="#collapse6" aria-expanded="true"
                       aria-controls="collapse6">Тюмень<span class="badge badge-primary badge-pill">1</span></a>
                    <a class="list-group-item d-flex justify-content-between align-items-center list-group-item-action"
                       type="button" data-toggle="collapse" data-target="#collapse7" aria-expanded="true"
                       aria-controls="collapse7">Карта дилеров<span class="badge badge-primary badge-pill">1</span></a>
                </div>
            </div>
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="d-flex flex-wrap">
                            <div class="cardi w-50  " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">РТИ-МИКРОН</h5>
                                    <p class="card-text">Адрес: ул. Невежина, 3, корп. 1, Курган, 640003</p>
                                    <p class="card-text">Тел:<a href="tel: +7 352 263-00-28"> +7 352 263-00-28</a></p>
                                    <a href="http://rti-mikron.ru//"><small class="text-muted">rti-mikron.ru</small></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">УралРемСервис</h5>
                                    <p class="card-text">Адрес: ул. Омская, 80, Курган, Курганская обл., 640007</p>
                                    <p class="card-text">Тел: <a href="tel: +7 352 254-52-34"> +7 352 254-52-34</a></p>
                                    <a href="https://uralrems.ru"><p class="card-text"><small
                                                class="text-muted">uralrems.ru</small></p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">КомплектСнаб</h5>
                                    <p class="card-text">Адрес: ул. Омская, 175, Курган, Курганская обл., 640007</p>
                                    <p class="card-text">Тел:<a href="tel: +7 352 263-01-11"> +7 352 263-01-11</a></p>
                                    <a href="https://ks45.ru"><p class="card-text"><small
                                                class="text-muted">ks45.ru</small></p>
                                    </a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">МКСМ-КУРГАН</h5>
                                    <p class="card-text">Адрес: ул. Бурова-Петрова, 123, Курган, Курганская обл.,
                                        640014</p>
                                    <p class="card-text">Тел:<a href="tel:+7 352 264-04-44" class="card-text"> +7 352
                                            264-04-44</a></p>
                                    <a href="https://www.mksm800.com"><p class="card-text"><small class="text-muted">www.mksm800.com</small>
                                        </p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">ООО "ПКФ" Техника"</h5>
                                    <p class="card-text">Адрес: пр. Машиностроителей, 23, Курган, Курганская обл.,
                                        640000</p>
                                    <p class="card-text">Тел:<a href="tel:+7 352 264-00-46" class="card-text"> +7 352
                                            264-00-46</a></p>
                                    <a href="https://pkf-tehnika.ru"><p class="card-text"><small class="text-muted">pkf-tehnika.ru</small>
                                        </p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">ТехноТранс</h5>
                                    <p class="card-text">Адрес: ул. Омская, 181 к.2, Курган, Курганская обл., 641306</p>
                                    <p class="card-text">Тел:<a href="tel:+7 909 170-23-23" class="card-text"> +7 909
                                            170-23-23</a></p>
                                    <a href="https://вездеходы-тт.рф"><p class="card-text"><small class="text-muted">вездеходы-тт.рф</small>
                                        </p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="d-flex flex-wrap">
                            <div class="cardi w-50  " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">АВТОКОМПАС</h5>
                                    <p class="card-text">Адрес: Москва, 66-й км МКАД, Деловой Центр \"Крокус Сити\"</p>
                                    <p class="card-text">Тел:<a href="tel:+7 495 780-76-75" class="card-text"> +7 495
                                            780-76-75</a></p>
                                    <a href="https://www.autocompass.ru/"><p class="card-text"><small
                                                class="text-muted">www.autocompass.ru</small>
                                        </p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">ЗЕТОРУС</h5>
                                    <p class="card-text">Адрес: владение 2 корп. 3 Северный АО RU 127591, Дубнинская
                                        ул.,
                                        79,
                                        Москва, 127540</p>
                                    <p class="card-text">Тел:<a href="tel:+7 800 200-05-51" class="card-text"> +7 800
                                            200-05-51</a></p>
                                    <a href="https://zetorus.ru"><p class="card-text"><small
                                                class="text-muted">zetorus.ru</small></p>
                                    </a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">Русбизнесавто</h5>
                                    <p class="card-text">Адрес: г. Киров, ул. Производственная, д. 27, кабинет 16</p>
                                    <p class="card-text">Тел:<a href="tel:+7 800 511-85-05" class="card-text"> +7 800
                                            511-85-05</a></p>
                                    <a href="https://rbauto.ru"><p class="card-text"><small
                                                class="text-muted">rbauto.ru</small>
                                        </p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">СПЕЦТЕХНИКА</h5>
                                    <p class="card-text">Адрес: ул. Гоголя, дом 39/1, офис 14, Томилино, Московская
                                        обл.,
                                        140070</p>
                                    <p class="card-text">Тел:<a href="tel:+7 903 253-70-62" class="card-text"> +7 903
                                            253-70-62</a></p>
                                    <a href="https://spc-tm.ru"><p class="card-text"><small
                                                class="text-muted">spc-tm.ru</small>
                                        </p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">ООО "МРО ТЕХИНКОМ"</h5>
                                    <p class="card-text">Адрес: ул. Расплетина, 5, Москва, 123060</p>
                                    <p class="card-text">Тел:<a href="tel:+7 495 974-37-47" class="card-text"> +7 495
                                            974-37-47</a></p>
                                    <a href="https://www.mroteh.ru"><p class="card-text"><small
                                                class="text-muted">www.mroteh.ru</small>
                                        </p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapse3" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="d-flex flex-wrap">
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">ВостокМашСервис</h5>
                                    <p class="card-text">Адрес: Челябинск, Челябинская обл., Россия, 454091</p>
                                    <p class="card-text">Тел:<a href="tel:+7 495 974-37-47" class="card-text"> +7 495
                                            974-37-47</a></p>
                                    <a href="https://www.mroteh.ru"><p class="card-text"><small
                                                class="text-muted">www.mroteh.ru</small>
                                        </p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">ООО "Машины и Механизмы"</h5>
                                    <p class="card-text">Адрес: пр. Ленина, дом 21в, офис 313, Челябинск, Челябинская
                                        обл.,
                                        454091</p>
                                    <p class="card-text">Тел:<a href="tel:+7 800 707-59-05" class="card-text"> +7 800
                                            707-59-05</a></p>
                                    <a href="https://www.mash-meh.ru"><p class="card-text"><small
                                                class="text-muted">www.mash-meh.ru</small>
                                        </p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">Русбизнесавто</h5>
                                    <p class="card-text">Адрес: Троицкий тракт, 12, Челябинск, Челябинская обл.,
                                        454053</p>
                                    <p class="card-text">Тел:<a href="tel:+7 800 551-93-66" class="card-text"> +7 800
                                            551-93-66</a></p>
                                    <a href="https://chelyabinsk.rbauto.ru"><p class="card-text"><small
                                                class="text-muted">chelyabinsk.rbauto.ru</small>
                                        </p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapse4" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="d-flex flex-wrap">
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">БОРУС-СТ</h5>
                                    <p class="card-text">Адрес: 610035, г.Киров, Мелькомбинатовский проезд, 7, Киров,
                                        Кировская обл.</p>
                                    <p class="card-text">Тел:<a href="tel:+7 800 555-96-00" class="card-text"> +7 800
                                            555-96-00</a></p>
                                    <a href="https://www.spectehnika.com"><p class="card-text"><small
                                                class="text-muted">www.spectehnika.com</small>
                                        </p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">«Русбизнесавто»</h5>
                                    <p class="card-text">Адрес: Производственная ул., 27, Киров, Кировская обл.,
                                        610035</p>
                                    <p class="card-text">Тел:<a href="tel:+7 (800) 551-82-69" class="card-text"> +7
                                            (800)
                                            551-82-69</a></p>
                                    <a href="https://www.rbauto.ru"><p class="card-text"><small
                                                class="text-muted">www.rbauto.ru</small>
                                        </p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapse5" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="d-flex flex-wrap">
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">ОНИКССПЕЦАВТО</h5>
                                    <p class="card-text">Адрес: Екатеринбург, ул. Вильгельма де Генина 45</p>
                                    <p class="card-text">Тел:<a href="tel:+7 (992) 001-22-24" class="card-text"> +7
                                            (992)
                                            001-22-24</a></p>
                                    <a href="https://oniks66.ru"><p class="card-text"><small
                                                class="text-muted">oniks66.ru</small>
                                        </p></a>
                                </div>
                            </div>
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">Урц Термез</h5>
                                    <p class="card-text">Адрес: ул.Совхозная.20е, Екатеринбург, Свердловская обл.,
                                        620057</p>
                                    <p class="card-text">Тел:<a href="tel:+7 343 373 47 74" class="card-text"> +7 343
                                            373 47
                                            74</a></p>
                                    <a href="https://termez.ru"><p class="card-text"><small
                                                class="text-muted">termez.ru</small>
                                        </p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapse6" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="d-flex flex-wrap">
                            <div class="cardi w-50 " style="max-width: 540px;">
                                <div class="card-body">
                                    <h5 class="card-title">Русбизнесавто</h5>
                                    <p class="card-text">Адрес: ул. Республики, 252, Строение 38, Тюмень, Тюменская
                                        обл.,
                                        625014</p>
                                    <p class="card-text">Тел:<a href="tel:+7 495 974-37-47" class="card-text"> +7 495
                                            974-37-47</a></p>
                                    <a href="https://tyumen.rbauto.ru"><p class="card-text"><small
                                                class="text-muted">tyumen.rbauto.ru</small>
                                        </p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="collapse7" class="collapse" aria-labelledby="headingOne"
                         data-parent="#accordionExample">
                        <div class="d-flex flex-wrap">
                            <iframe class="col p-0" src="https://www.google.com/maps/d/embed?mid=1C4juyc6iK-fKgeD9ZDx1o3m3qBY663U&ehbc=2E312F"
                                    width="640"
                                    height="480"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="w-100">

    </div>

@endsection
