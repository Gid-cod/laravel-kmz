@extends('app')

@section('title', 'Новости')

@section('content')
    <div class="container-fluid w-75">
        @forelse($news as $news)
        <div class="row mt-0 mb-0 pb-5 pt-5">
            <div class="col">
                <img class="card-img-top" src="{{$news->image}}" alt="{{$news->name}}">
            </div>
            <div class="col-12 col-md-8 col-lg-8 col-xl-8">
                <p style="margin-top:10px;">Добавлено | {{ date('d.m.Y',strtotime($news->created_at)) }}</p>
                <h2>{{$news->name}}</h2>
                <p>{{$news->Short_description}}</p>
                <p>{{$news->info}}</p>

            </div>
        </div>
        @empty
        @endforelse
    </div>
@endsection
