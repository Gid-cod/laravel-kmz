@extends('app')

@section('title',$item->name)

@section('content')
    <div class="container-fluid w-75 mt-5">
        <div class="row shadow bg-white rounded mb-5">
            <div class="col-5 ">
                <img class="card-img-top" style="object-fit: cover;" src="{{$item->image}}" alt="{{$item->name}}">
            </div>
            <div class="col p-3">
                <h2 class="mb-2">{{$item->name}}</h2>
                <p class="mb-1">Производство : {{$item->model_country}}</p>
                <p class="mb-1">Год выпуска: {{$item->model_year}}</p>
                <p class="mb-1">Модель: {{$item->model_type}}</p>
                <h6 class="mb-1 ">Описание:</h6>
                <p class="mb-1 ">{{$item->Short_description}}</p>
                <h6 class="mb-1">Дополнительное описание: </h6>
                <p class="mb-1">{{$item->info}}</p>
                <div class="d-flex align-items-center rounded justify-content-between border border-info mt-3">
                    @auth
                        <p class="text-dark   p-2 m-0">Цена: {{$item->price}} р</p>
                        <button type="button" data-id="{{$item->id}}"
                                class="btn btn-primary  addToCart col-5 liveToastBtn">В
                            корзину
                        </button>
                        <div class="position-fixed bottom-0 right-0 p-3"
                             style="z-index: 5; right: 0; bottom: 0;">
                            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive"
                                 aria-atomic="true" data-delay="1000">
                                <div class="toast-header">
                                    <strong class="mr-auto">Уведомление</strong>
                                    <small></small>
                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast"
                                            aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="toast-body">
                                    Товар добавлен в корзину
                                </div>
                            </div>
                        </div>
                    @endauth
                </div>
            </div>
        </div>
    </div>

@endsection
