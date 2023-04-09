@extends('app')

@section('title', 'Каталог')

@section('content')
    <div class="container-fluid w-85 mt-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">О нас</a></li>
                <li class="breadcrumb-item active" aria-current="page">Каталог</li>
            </ol>
        </nav>
        <div class="jumbotron">
            <h1 class="display-4">Каталог</h1>
            <p class="lea">Продукция "Курганмашзавод"</p>
            <hr class="my-4">
            <p>ПАО «Курганмашзавод» является крупнейшим машиностроительным комплексом Зауралья, оснащенным современным
                оборудованием, обеспечивающим полный производственный цикл от всех видов механической обработки до
                сборки и комплексных испытаний готовой продукции.</p>
        </div>
        <div class="row mt-5">
            <div class="col-3">
                <div class="col-9 sticky-top">
                    <form method="GET">
                        @method('GET')
                        @csrf
                        <h3>Фильтр</h3>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Параметры</label>
                            </div>
                            <select name="sort" class="custom-select" aria-label="Default select example">
                                @foreach([
                                    'id' => 'По новизне',
                                    'model_year' => 'По году производства',
                                    'name' => 'По наименованию',
                                    'price' => 'По цене',
                                ] as $key => $name)
                                    <option @if($sort === $key) selected @endif value="{{$key}}">{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Порядок</label>
                            </div>
                            <select name="type" class="custom-select" aria-label="Default select example">
                                @foreach([
                                    'asc' => 'Сначала старые',
                                    'desc' => 'Сначала новые',
                                ] as $key => $name)
                                    <option @if($type === $key) selected @endif value="{{$key}}">{{$name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text">Категории</label>
                            </div>
                            <select name="category_id" class="custom-select" aria-label="Default select example">
                                <option value="">Все</option>
                                @foreach($categories as $category)
                                    <option @if($category->id === $categoryId) selected
                                            @endif value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button class="btn btn-success mb-2" type="submit">Применить</button>
                    </form>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-wrap">
                    @forelse($items as $item)
                        <div class="cart shadow bg-white rounded-lg-3 me-2" style="width: 21rem;">
                            <a href="{{route('show', $item)}}"><img src="{{$item->image}}" class="card-img-top"
                                                                    alt="{{$item->name}}"></a>
                            <div class="card-body">
                                <p class="text-muted"></p>
                                <h5 class="card-title">{{$item->name}}</h5>
                                <p class="card-text">Модель: {{$item->model_type}}</p>
                                <p class="card-text">В наличии: {{$item->available}} шт.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    @auth
                                        <p class="card-text col" style="vertical-align: inherit">Цена: {{$item->price}}
                                            р</p>
{{--                                        <button data-id="{{$item->id}}" class="btn btn-primary addToCart col-5">В--}}
{{--                                            корзину--}}
{{--                                        </button>--}}
                                        <button type="button" data-id="{{$item->id}}"  class="btn btn-primary  addToCart col-5 liveToastBtn">В
                                            корзину
                                        </button>
                                        <div class="position-fixed bottom-0 right-0 p-3"
                                             style="z-index: 5; right: 0; bottom: 0;">
                                            <div id="liveToast" class="toast hide" role="alert" aria-live="assertive"
                                                 aria-atomic="true" data-delay="1000">
                                                <div class="toast-header">
                                                    <strong class="mr-auto">Уведомление</strong>
                                                    <small></small>
                                                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
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
                    @empty
                        <div class="alert alert-primary" role="alert">
                            Товары не найдены
                        </div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
    @stack('scripts')
    <script>

    </script>
@endsection
