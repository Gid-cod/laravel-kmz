@extends('app')

@section('title', 'Корзина')

@section('content')
    <div class="container-fluid w-75">
        <h2 class="mb-2">Корзина</h2>
        <div class="row  p-3 mb-5  rounded">
            <div class="col-9">
                @forelse($items as $item)
                    <div class=" shadow  p-3 mb-3 bg-white rounded text-dark" style="max-width: 100%;">
                        <div class="row no-gutters">
                            <div class="col-md-2">
                                <div class="card-body">
                                    <img  src="{{$item['item']['image']}}" class="card-img-top"
                                         alt="{{$item['item']['name']}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card-body">
                                    <h5 class="card-title">{{$item['item']['name']}}</h5>
                                    <p class="text-muted card-text">Модель: {{$item['item']['model_type']}}</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="card-body">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="card-text mr-2 user-select-none"
                                             style="font-size: 20px">{{$item['item']['price']}} ₽
                                        </div>
                                        <a data-id="{{$item['item']['id']}}" data-count="-1"
                                           class="nav-minus grow mr-2 editCart"><i class="icon-minus"></i></a>
                                        <div class="user-select-none" style="font-size: 20px">{{$item['count']}}</div>
                                        <a data-id="{{$item['item']['id']}}" data-count="1"
                                           class="nav-plus grow ml-2 editCart"><i class="icon-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card-body">
                                    <div style="font-size: 20px" class="row align-items-center justify-content-center">
                                        <div
                                            class="card-text user-select-none font-weight-bold">{{$item['item']['price'] * $item['count']}}
                                            ₽
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @empty
                    <div class="" role="alert">
                        Корзина пуста
                    </div>
                @endforelse
            </div>
            <div class="col-3 p-0">
                <div class=" sticky-top  shadow p-3 bg-white rounded">
                    <div class="mt-2 mb-4">
                        <div class="user-select-none text-muted" style="font-size: 14px">Товары: {{$finalCount}} шт.
                        </div>
                        <div class="user-select-none " style="font-size: 19px">Итого: {{$finalPrice}} ₽</div>
                    </div>
                    <form class="order-form">
                        @method('post')
                        @csrf
                        {{--                        <div class="mb-3">--}}
                        {{--                            <label for="exampleInputPassword1" class="form-label">Адрес доставки</label>--}}
                        {{--                            <input required type="password" name="password" class="form-control" id="exampleInputPassword1">--}}
                        {{--                        </div>--}}

                        <button style="width: 100%;" type="submit" class="btn btn-success">Оформить заказ
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('.editCart').click(function () {
            const itemId = $(this).data('id')
            const count = Number($(this).data('count'))
            addToCart(itemId, count, true)
        })

        document.querySelector('.order-form').onsubmit = function (e) {
            e.preventDefault();

            $.post('/order/create', $('.order-form').serializeArray(), data => {
                if (data.error) return alert(data.error)
                location.href = '/orders'
            }).fail(err => alert('неизвестная ошибка'))
        }
    </script>
@endpush
