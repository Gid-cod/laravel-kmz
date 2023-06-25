@extends('app')

@section('title', 'Заказы')

@section('content')
    <div class="container">
        <div class="col order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Мои заказы</span>
            </h4>
            @forelse($orders as $order)
            <ul class="list-group mb-3">
                @foreach($order->items as $orderItem)
                <li class="list-group-item d-flex justify-content-between align-items-center lh-condensed">
                    <div class="col-2">
                        <div class="card-body">
                        <h6 class="my-0">{{$orderItem['item']['name']}}</h6>
                        <small class="text-muted">кол-во: {{$orderItem['available']}} шт.</small>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card-body">
                    <span class="text-muted">Итоговая цена: {{$orderItem['price']}} ₽</span>
                        </div>
                    </div>
                    <div class="mb-2 col-3">Статус: {{$order->status}}</div>
                    @if( $order->status === 'Подтверждён')
                        @if($order->toArray(null)["pay"] ?? "")
                            <p>Статус платежа:</p><a href="{{$order->toArray(null)["pay"]}}" class="btn bg-success">Оплатить</a>
                        @else
                           <p>Статус платежа: </p><p class="text-success">Оплачено</p>
                        @endif
                    @elseif($order->status === 'Новый')
                        <a href="{{route('deleteOrder', $order)}}" class="btn btn-danger">Удалить</a>
                    @elseif($order->status === 'Отменён')
                        <p>Причина отмены заказа: {{$order->description}}</p>
                    @endif
                </li>

                @endforeach

            </ul>
            @empty
                <div class="" role="alert">
                    Вы еще не сделали ни одного заказа
                </div>
            @endforelse
        </div>
    </div>
@endsection
