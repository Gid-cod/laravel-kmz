@extends('admin.index')

@section('title', 'Все заказы')

@section('content')
    <div class="">
        <form class="row ml-0 mr-0" method="get">
            @method('get')
            @csrf
            <h3>Фильтр</h3>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Статус</label>
                </div>
                <select name="status" class="custom-select" aria-label="Default select example">
                    <option value="">Все</option>
                    @foreach([
                        'Новый' => 'Новый',
                        'Подтверждён' => 'Подтверждён',
                        'Отменён' => 'Отменён',
                    ] as $key => $name)
                        <option @if($key === $status) selected @endif value="{{$key}}">{{$name}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary w-100">Поиск</button>
        </form>
        <div class="row mt-5">
            <div class="col">
                <div class="d-flex flex-wrap">
                    @forelse($orders as $order)
                        <div class="cart  shadow bg-white rounded-lg-3 me-2">
                            <div class="card-body">
                            @foreach($order->items as $orderItem)
                                <div class="mb-2" style="width: 18rem;">
                                        <h5 class="card-title">{{$orderItem['item']['name']}}</h5>
                                </div>
                            @endforeach
                            <div class="mb-2">Сума заказа: {{($order->toArray(null)['total'])}}</div>
                            <div class="mb-2">Статус платежа: {{$order->payment['status']}}</div>
                            <div class="mb-2">Статус:@if( $order->status === 'Подтверждён')
                                    <p class="text-success">Подтверждён</p>
                                @elseif($order->status === 'Новый')
                                    <p class="text-primary">Новый</p>
                                @elseif($order->status === 'Отменён')
                                    <p class="text-warning">Причина отмены заказа: {{$order->description}}</p>
                                @endif</div>

                            <div class="mb-2">Дата: {{$order->created_at}}</div>
                            <div class="mb-2">Всего товаров: {{collect($order->items)->sum('count')}}</div>
                            <p>ФИО покупателя: {{$order->toArray(null)['username']}}</p>
                            <p>Email покупателя: {{$order->toArray(null)['userEmail']}}</p>
                            @if($order->status === 'Новый')
                                <a href="{{route('admin.orders.confirm', $order)}}" class="btn btn-success w-100 mb-4">Подтвердить
                                    заказ</a>

                                <p class="text-lg-center">ИЛИ</p>

                                <form action="{{route('admin.orders.cancel', $order)}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Причина отмены заказа</label>
                                        <input required type="text" name="description" class="form-control"
                                               id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Отменить</button>
                                </form>
                            @endif
                            </div>
                        </div>
                    @empty
                        <div>
                            Еще нет ни одного заказа
                        </div
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection
