@extends('admin.index')

@section('title', 'Все заказы')

@section('content')
    <div class="row">
        <div class="col-3">
            <form method="get">
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
        </div>
        <div class="col">
            <div class="d-flex flex-wrap">

                @forelse($orders as $order)
                    <div class="p-4 card">
                        @foreach($order->items as $orderItem)
                            <div class="mb-2" style="width: 18rem;">
                                <img src="{{$orderItem['item']['image']}}" class="card-img-top"
                                     alt="{{$orderItem['item']['name']}}">
                                <div class="card-body">
                                    <h5 class="card-title">{{$orderItem['item']['name']}}</h5>
                                    <p class="card-text">{{$orderItem['price'] * $orderItem['count']}} р.</p>
                                    <p class="card-text">Количество товара: {{$orderItem['count']}} </p>
                                </div>
                            </div>
                        @endforeach

                        <div class="mb-2">Статус: {{$order->status}}</div>
                        <div class="mb-2">Дата: {{$order->created_at}}</div>
                        <div class="mb-2">Всего товаров: {{collect($order->items)->sum('count')}}</div>
                        @foreach($users as $user)
                            @if($user->id === $order->user_id)
                                <p>ФИО покупателя: {{$user->surname}} {{$user->name}} {{$user->patronymic}}</p>
                            @endif
                        @endforeach

                        @if($order->status === 'Новый')
                            <a href="{{route('admin.orders.confirm', $order)}}" class="btn btn-success mb-4">Подтвердить
                                заказ</a>

                            <h3>ИЛИ</h3>

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
        </div>
        @empty
            <div>
                Еще нет ни одного заказа
            </div
        @endforelse
    </div>
@endsection
