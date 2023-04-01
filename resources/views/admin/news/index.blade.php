@extends('admin.index')

@section('title', 'Товары')

@section('content')
    <a href="{{route('admin.news.createPage')}}" class="btn btn-success mt-3">Создать новость</a>
    <div class="d-flex flex-wrap mt-3">
        @forelse($news as $news)
            <div class="card me-2" style="width: 18rem;">
                <img src="{{$news->image}}" class="card-img-top" alt="{{$news->name}}">
                <div class="card-body">
                    <h5 class="card-title">{{$news->name}}</h5>
                    <p class="card-text">{{ date('d.m.Y',strtotime($news->created_at)) }}</p>
                    <a href="{{route('admin.news.updatePage', $news)}}" class="btn btn-primary">Редактировать</a>
                    <a href="{{route('admin.news.delete', $news)}}" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary mt-3" role="alert">
                Новостей нет
            </div>
        @endforelse
    </div>
@endsection
