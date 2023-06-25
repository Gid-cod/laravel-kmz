@extends('admin.index')

@section('title', 'Новости')

@section('content')

    <a href="{{route('admin.news.createPage')}}" class="btn btn-success mt-3">Создать новость</a>
    <div class="d-flex flex-wrap mt-3">
        @forelse($news as $news)
            <div class="cart  shadow bg-white rounded-lg-3 me-2" style="width: 19rem;">
                <img src="{{$news->image}}" class="card-img-top" alt="{{$news->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{Str::limit($news->name, 99, '...')}}</h5>
                    <p class="card-text">{{ date('d.m.Y',strtotime($news->created_at)) }}</p>
                    <a href="{{route('admin.news.updatePage', $news)}}" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Редактировать</a>
                    <a href="{{route('admin.news.delete', $news)}}" class="btn btn-danger"><i class="bi bi-trash"></i> Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary mt-3" role="alert">
                Новостей нет
            </div>
        @endforelse
    </div>
@endsection
