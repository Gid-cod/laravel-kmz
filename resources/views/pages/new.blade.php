@extends('app')

@section('title', 'Новости')

@section('content')
    <div class="container-fluid w-75">
        <div class="">
            <form method="GET" class="row ml-0 mr-0 mt-3">
                @method('get')
                @csrf
                <h3>Фильтр</h3>
                {{--                <div class="input-group mb-0 col">--}}
                {{--                    <div class="input-group-prepend">--}}
                {{--                        <label class="input-group-text">Параметры</label>--}}
                {{--                    </div>--}}
                {{--                    <select name="sort" class="custom-select" aria-label="Default select example">--}}
                {{--                        @foreach([--}}
                {{--                            'id' => 'По новизне',--}}
                {{--                            'timestamps' => 'По дате',--}}
                {{--                        ] as $key => $name)--}}
                {{--                            <option @if($sort === $key) selected @endif value="{{$key}}">{{$name}}</option>--}}
                {{--                        @endforeach--}}
                {{--                    </select>--}}
                {{--                </div>--}}
                {{--                <div class="input-group mb-0 col">--}}
                {{--                    <div class="input-group-prepend ">--}}
                {{--                        <label class="input-group-text">Порядок</label>--}}
                {{--                    </div>--}}
                {{--                    <select name="type" class="custom-select" aria-label="Default select example">--}}
                {{--                        @foreach([--}}
                {{--                            'asc' => 'Сначала старые',--}}
                {{--                            'desc' => 'Сначала новые',--}}
                {{--                        ] as $key => $name)--}}
                {{--                            <option @if($type === $key) selected @endif value="{{$key}}">{{$name}}</option>--}}
                {{--                        @endforeach--}}
                {{--                    </select>--}}
                {{--                </div>--}}
                <div class="input-group mb-0 col">
                    <div class="input-group-prepend mb-0">
                        <label class="input-group-text">Категории</label>
                    </div>
                    <select name="type_id" class="custom-select" aria-label="Default select example">
                        <option value="">Все</option>
                        @forelse($types as $types)
                            <option @if($types->id === $typeId) selected
                                    @endif value="{{$types->id}}">{{$types->name}}</option>
                        @empty
                            @if($typeId !== null )
                            <div class="alert alert-danger" role="alert">
                                Новости в выбранной вами категории отсутствуют!
                            </div>
                            @endif
                        @endforelse
                    </select>
                </div>
                <button class="btn btn-success mb-2" type="submit">Применить</button>
            </form>
        </div>
        @forelse($news as $news)
            <div class="row mt-0 mb-0 pb-5 pt-5">
                <div class="col">
                    <img class="card-img-top" src="{{$news->image}}" alt="{{$news->name}}">
                </div>
                <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                    <p style="margin-top:10px;">Добавлено | {{$news->created_at->diffForHumans()}}</p>
                    <h2>{{$news->name}}</h2>
                    <p>{{$news->Short_description}}</p>
                    <p>{{$news->info}}</p>

                </div>
            </div>
        @empty
                <div class="alert alert-warning" role="alert">
                    Новостей нет
                </div>
        @endforelse
    </div>
@endsection
