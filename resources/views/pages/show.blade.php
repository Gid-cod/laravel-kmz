@extends('app')

@section('title',$item->name)

@section('content')
    <div class="container-fluid w-75 mt-5">
        <div class="row shadow bg-white rounded">
            <div class="col-5 ">
                <img class="card-img" style="object-fit: cover;" src="{{$item->image}}" alt="{{$item->name}}">
            </div>
            <div class="col p-3">
                <h2 class="mb-2">{{$item->name}}</h2>
                <p class="mb-1">Производство : {{$item->model_country}}</p>
                <p class="mb-1">Год выпуска: {{$item->model_year}}</p>
                <p class="mb-1">Модель: {{$item->model_type}}</p>
                <p class="mb-1">Описание: {{$item->Short_description}}</p>
                <div class="d-flex align-items-center sticky-top">
                    @auth
                        <p class="card-text col-5 p-2 m-0">Цена: {{$item->price}} р</p>
                        <button data-id="{{$item->id}}" class="btn btn-primary  addToCart col-5 p-2">В
                            корзину
                        </button>
                    @endauth
                </div>
            </div>
            <div class="col-3 ">

{{--                @auth--}}
{{--                    <button data-id="{{$item->id}}" class="btn btn-primary addToCart">В корзину</button>--}}
{{--                @endauth--}}

            </div>
        </div>
        <p>
            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Описание</a>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Toggle second element</button>

        </p>
        <div class="row">
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample1">
                    <div class="card card-body">
                       <p class="text-justify">{{$item->info}}</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card card-body">
                        Some placeholder content for the second collapse component of this multi-collapse example. This panel is hidden by default but revealed when the user activates the relevant trigger.
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
