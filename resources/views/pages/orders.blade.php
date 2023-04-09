@extends('app')

@section('title', 'Заказы')

@section('content')
    <div class="container-fluid w-75">
        <h2 class="mb-4">Заказы</h2>
        <div class="d-flex flex-wrap">
            @forelse($orders as $order)
                <div class="p-4 card">
                    @foreach($order->items as $orderItem)
                        <div class="mb-2" style="width: 18rem;">
                            <img src="{{$orderItem['item']['image']}}" class="card-img-top"
                                 alt="{{$orderItem['item']['name']}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$orderItem['item']['name']}}</h5>
                                <p class="card-text">{{$orderItem['price']}} р.</p>
                            </div>
                        </div>
                    @endforeach
                    <div class="mb-2">Статус: {{$order->status}}</div>
                    @if($order->status === 'Подтверждён' && $order->pay)
                        <a href="{{$order->pay}}" class="btn bg-success">Оплатить</a>
                    @endif
                    @if($order->status === 'Новый')
                        <a href="{{route('deleteOrder', $order)}}" class="btn btn-danger">Удалить</a>
                    @elseif($order->status === 'Отменён')
                        <p>Причина отмены заказа: {{$order->description}}</p>
                    @endif
                </div>
            @empty
                <div class="" role="alert">
                    Вы еще не сделали ни одного заказа
                </div>
            @endforelse
        </div>
    </div>
@endsection
