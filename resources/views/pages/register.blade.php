@extends('none')

@section('title', 'Регистрация')

@section('content')

    <form class="register-form form-signin text-center" >
        @method('post')
        @csrf
        <img class="mb-4" src="/img/Ресурс%2015.png" alt="logo" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Регистрация</h1>
        <div class=" mb-3 text-left ">
            <input placeholder="Фамилия" required type="text" name="surname" class="form-control"
                   aria-describedby="emailHelp">
            <span class="text-danger"></span>
        </div>
        <div class=" mb-3 text-left ">
            <input placeholder="Имя" required type="text" name="name"
                   class="form-control" aria-describedby="emailHelp">
            <span class="text-danger"></span>
        </div>
        <div class=" mb-3 text-left ">
            <input placeholder="Отчество" type="text" name="patronymic" class="form-control"
                   aria-describedby="emailHelp">
            <span class="text-danger"></span>
        </div>
        <div class=" mb-3 text-left ">
            <input placeholder="Логин" required type="text" name="login" class="form-control"
                   aria-describedby="emailHelp">
            <span class="text-danger"></span>
        </div>
        <div class=" mb-3 text-left ">
            <input placeholder="Email" required type="email" name="email" class="form-control"
                   aria-describedby="emailHelp">
            <span class="text-danger"></span>
        </div>
        <div class=" mb-3 text-left ">
            <input placeholder="Пароль" required type="password" name="password"
                   class="form-control" aria-describedby="emailHelp">
            <span class="text-danger"></span>
        </div>
        <div class=" mb-3 text-left ">
            <input placeholder="Повторение пароля" required type="password" name="password_repeat"
                   class="form-control" aria-describedby="emailHelp">
            <span class="text-danger"></span>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input type="checkbox" name="rules" class="form-check-input" id="exampleCheck">
                <label class="form-check-label" for="exampleCheck">Согласие с правилами
                    регистрации</label>
                <div>
                    <span class="text-danger"></span>
                </div>
            </div>

        </div>
        <button type="submit" class="btn btn-block btn-outline-success">Создать аккаунт</button>

        <p class="mt-0 mb-0 text-muted">или</p>
        <a href="{{route('login')}}" type="submit" class="btn btn-block btn-outline-primary">Авторизоваться</a>
        <p class="mt-5 mb-3 text-muted">© 2023</p>
    </form>

@endsection

@push('scripts')
    <script>
        document.querySelector('.register-form').onsubmit = function (e) {
            e.preventDefault()

            $('form input').removeClass('is-invalid').parent().find('span').text('')

            $.post('/register', $('.register-form').serializeArray(), data => {
                location.href = '/'
            }).fail(err => {
                const {errors} = err.responseJSON
                for (const key in errors) {
                    $(`input[name="${key}"]`).addClass('is-invalid').parent().find('span').text(errors[key][0])
                }
            })

        }
    </script>

@endpush
