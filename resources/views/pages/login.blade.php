@extends('none')

@section('title', 'Авторизация')
@section('content')
    <form class="login-form form-signin text-center">
        @method('post')
        @csrf
        <img class="mb-4" src="/img/Ресурс%2015.png" alt="logo" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Авторизация</h1>
        <div class="mb-3 text-left">
        <input placeholder="Логин" required type="text" name="login" aria-describedby="emailHelp"
               class="form-control">
        <span class="text-danger"></span>
        </div>
        <div class="mb-3 text-left">
        <input placeholder="Пароль" required type="password" name="password" aria-describedby="emailHelp"
               class="form-control">
        <span class="text-danger"></span>
        </div>
        <button  type="submit" class="btn btn-lg btn-block btn-outline-success">Войти</button>
        <p class="mt-0 mb-0 text-muted">или</p>
        <a  href="{{route('register')}}" type="button" class="btn btn-block btn-lg btn-outline-primary">Зарегистрироваться</a>
        <p class="mt-5 mb-3 text-muted">© 2023</p>
    </form>
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
