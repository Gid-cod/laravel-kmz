@extends('app')

@section('title', 'О нас')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide container w-75" data-ride="carousel">

        <div class="carousel-inner">
            @forelse($items as $index => $item)
                <div class="carousel-item @if($index === 0) active @endif">
                    <img src="{{$item->image}}"  class="card-img" alt="{{$item->name}}">
                    <div class="carousel-caption rounded d-none d-md-block bg-info ">
                        <h5>{{$item->name}}</h5>
                        <p>Модель: {{$item->model_type}}</p>
                    </div>
                </div>
            @empty
                Товаров еще нет
            @endforelse
        </div>
        <button class="carousel-control-prev " type="button" data-target="#carouselExampleIndicators" data-slide="prev">
            <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
            <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </button>
    </div>

@endsection
