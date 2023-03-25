@extends('app')

@section('title', 'Авторизация')
@section('content')
    {{--    <form class="login-form container">--}}
    {{--        @method('post')--}}
    {{--        @csrf--}}
    {{--        <div class="mb-3">--}}
    {{--            <label class="form-label">Логин</label>--}}
    {{--            <input placeholder="Логин" required type="text" name="login" class="form-control"--}}
    {{--                   aria-describedby="emailHelp">--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <div class="mb-3">--}}
    {{--            <label class="form-label">Пароль</label>--}}
    {{--            <input placeholder="Пароль" required type="password" name="password" class="form-control"--}}
    {{--                   aria-describedby="emailHelp">--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <button type="submit" class="btn btn-primary">Войти</button>--}}
    {{--    </form>--}}
    <div class="sign-in">
        <div class="vxod">
            <div class="sign-form">
                <div class="form-info">
                    <img class="sign-i" src="public/img/free-icon-user-1177568.png" alt="">
                </div>
                <div class="form">
                    <h2>Вход в личный кабинет</h2>
                    <form class="login-form container">
                        @method('post')
                        @csrf
                        <div class="mb-3">
                            <input placeholder="Логин" required type="text" name="login"
                                   aria-describedby="emailHelp" class="form-control">
                            <span class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <input placeholder="Пароль" required type="password" name="password"
                                   aria-describedby="emailHelp" class="form-control">
                            <span class="text-danger"></span>
                        </div>
                        <button type="submit" class="btn btn-outline-success">Войти</button>
                        <a href="{{route('register')}}" type="button" class="btn btn-primary">Зарегистрироваться</a>
                    </form>


                </div>
            </div>
        </div>

    </div>
@endsection

@push('scripts')
    <script>
        document.querySelector('.login-form').onsubmit = function (e) {
            e.preventDefault();

            $('form input').removeClass('is-invalid').parent().find('span').text('')

            $.post('/login', $('.login-form').serializeArray(), data => {
                location.href = '/'
            }).fail(err => {
                const {errors} = err.responseJSON;
                for (let key in errors) {
                    $(`input[name="${key}"]`).addClass('is-invalid').parent().find('span').text(errors[key][0])
                }
            })
        }
    </script>
@endpush
