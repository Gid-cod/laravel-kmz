@extends('app')

@section('title', 'Профиль')

@section('content')
<div class="container-fluid w-75">
    <div class="row g-4">
        <!-- Profile cover and info START -->
        <div class="col">
            <div class="card mb-4 mt-3 shadow bg-light rounded-4 border-0 ">
                <div class="card-body w-100 p-3 pb-0 ">
                    @if (Session::has('success'))
                        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                            {{ Session::get('success') }}
                            <button type="button" class="close" data-dismiss="alert"  aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    @if (Auth::user()->photo)
                    <img src="{{ asset('storage/photos/' . Auth::user()->photo_cover) }}" alt="" class="w-100 mt-2 mb-2 rounded-5" height="300" style="object-fit: cover">
                    @endif
                    <div class="row  d-flex  align-items-center">
                        <!-- Avatar -->
                        <div class="col-sm-12 col-md-auto">
                            <div class="card-img-top">
                                @if (Auth::user()->photo)
                                    <img class="rounded-circle border border-white border-3 shadow"
                                         src="{{ asset('storage/photos/' . Auth::user()->photo) }}"
                                         alt="Фото профиля" height="100" width="100" style="object-fit:cover;">
                                @endif
                            </div>
                        </div>
                        <!-- Profile info -->
                        <div

                            class="col-sm-12 col-md text-left d-md-flex justify-content-between">
                            <div>
                                <h4 class="my-1">{{$user->name}} {{$user->surname}} <i
                                        class="bi bi-patch-check-fill text-info small"></i></h4>
                                <ul class="list-inline mb-0 ">
                                    <li class="list-inline-item "><p class="card-text p-1 mb-1 "><i class="bi bi-envelope-at-fill text-info"></i> {{$user->email}}</p></li>
                                    <li class="list-inline-item"><p class="card-text p-1 mb-1 "><i
                                                class="bi bi-telephone-fill text-info"></i> {{$user->telephone}}</p></li>
                                    <li class="list-inline-item"><p class="card-text p-1 mb-1 "><i
                                            class="bi bi-calendar2-plus text-info"></i> {{ date('d.m.Y',strtotime($user->birthday)) }}</p>
                                    </li>
                                    <li class="list-inline-item"><p class="card-text p-1 mb-1 "><i
                                                class="bi bi-person-plus text-success "></i> {{ date('d.m.Y',strtotime($user->created_at)) }}</p>
                                    </li>
                                </ul>
                                <p class="m-0"></p>
                            </div>

                            <div class="d-flex  align-items-end">
                                <div class="btn-group">
                                    <a type="button" class="nav-link text-info" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><i class="bi bi-gear fa-fw mr-2 "></i>Настройки</a>
                                    <div class="dropdown-menu dropdown-menu-left bg-info ">
                                        <a class="nav-link text-success" href="{{route('editprofil')}}"><i class="bi bi-pencil-square mr-2"></i>Редактировать</a>

                                        <div class="dropdown-divider"></div>
                                        <a class="nav-link text-danger" href="{{route('logout')}}"><i class="bi bi-box-arrow-left mr-2" style="font-size: 19px"></i> Выход</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile info END -->
    </div>
    <div class="col-md-4 order-md-2 mb-4 p-0 ">
        <h4 class="d-flex justify-content-between align-items-center p-2 rounded-4 bg-light mb-3">
            <span class="card-text">Ваша корзина</span>
            <span class="badge badge-secondary badge-pill">{{$finalCount}}</span>
        </h4>
        <ul class="list-group mb-3">

            @forelse($items as $item)

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">{{$item['item']['name']}}</h6>
                        <small class="text-muted">Модель: {{$item['item']['model_type']}}</small>
                    </div>
                    <div>
                        <span class="text-muted">{{$item['count']}} шт</span>
                        <span class="text-muted">{{$item['item']['price'] * $item['count']}}₽</span>
                    </div>
                </li>
            @empty
                <div class="" role="alert">
                    Корзина пуста
                </div>
            @endforelse
            <li class="list-group-item d-flex justify-content-between">
                <span>Итого (RUB)</span>
                <strong>{{$finalPrice}} ₽</strong>
            </li>
            <a href="{{route('cart')}}" class="btn btn-outline-success mt-2">Перейти к оформлению</a>
        </ul>
    </div>
</div>
{{--    <div class="">--}}

{{--        <div class="row mt-5 container-fluid mb-5">--}}


{{--            <div class="col-3">--}}
{{--                <div class="d-flex flex-wrap">--}}

{{--                    <div class="cart  shadow bg-white rounded-4 me-2" style="width: 23rem;">--}}
{{--                        @if (Auth::user()->photo)--}}
{{--                            <img class="card-img-top rounded-4 w-100" height="250" style="object-fit: cover"--}}
{{--                                 src="{{ asset('storage/photos/' . Auth::user()->photo) }}"--}}
{{--                                 alt="Фото профиля">--}}
{{--                        @endif--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="btn-group dropright align-items-center w-100 justify-content-between">--}}
{{--                                <h5 class="card-title mb-0">{{$user->name}} {{$user->surname}}</h5> <a type="button"--}}
{{--                                                                                                       class="nav-link text-info"--}}
{{--                                                                                                       data-toggle="dropdown"--}}
{{--                                                                                                       aria-haspopup="true"--}}
{{--                                                                                                       aria-expanded="false"><i--}}
{{--                                        class="bi bi-gear fa-fw mr-2 "></i>Настройки</a>--}}
{{--                                <div class="dropdown-menu dropdown-menu-left  ">--}}
{{--                                    <a class="nav-link text-success" href="{{route('editprofil')}}"><i--}}
{{--                                            class="bi bi-pencil-square mr-2"></i>Редактировать</a>--}}

{{--                                    <div class="dropdown-divider"></div>--}}
{{--                                    <a class="nav-link text-danger" href="{{route('logout')}}"><i--}}
{{--                                            class="bi bi-box-arrow-left mr-2" style="font-size: 19px"></i> Выход</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p class="card-text p-0 m-0">Адрес эл.почты</p>--}}
{{--                            <p class="card-text border rounded p-2 mb-1 bg-light"><i--}}
{{--                                    class="bi bi-envelope-at-fill text-info"></i> {{$user->email}}</p>--}}
{{--                            <p class="card-text p-0 m-0">Номер телефона</p>--}}
{{--                            <p class="card-text border rounded p-2 mb-1 bg-light"><i--}}
{{--                                    class="bi bi-telephone-fill text-info"></i> {{$user->telephone}}</p>--}}
{{--                            <p class="card-text p-0 m-0">Дата рождения</p>--}}
{{--                            <p class="card-text border rounded p-2 mb-1 bg-light"><i--}}
{{--                                    class="bi bi-calendar2-plus text-info"></i> {{ date('d.m.Y',strtotime($user->birthday)) }}--}}
{{--                            </p>--}}
{{--                            <p class="card-text p-0 m-0">Дата регистрации</p>--}}
{{--                            <p class="card-text border rounded p-2 mb-1 bg-light"><i--}}
{{--                                    class="bi bi-person-plus text-success "></i> {{ date('d.m.Y',strtotime($user->created_at)) }}--}}
{{--                            </p>--}}

{{--                            <div class="d-flex align-items-center justify-content-center justify-content-md-end">--}}

{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}

{{--        </div>--}}

{{--    </div>--}}

@endsection
