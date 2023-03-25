@extends('app')

@section('title', 'Регистрация')

@section('content')

    {{--    <form class="register-form container">--}}

    {{--        @method('post')--}}
    {{--        @csrf--}}
    {{--        <div class="col-md-6 mb-3">--}}
    {{--            <label class="form-label">Имя</label>--}}
    {{--            <input placeholder="Имя" required type="text" name="name" class="form-control" aria-describedby="emailHelp">--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <div class="col-md-6 mb-3">--}}
    {{--            <label class="form-label">Фамилия</label>--}}
    {{--            <input placeholder="Фамилия" required type="text" name="surname" class="form-control" aria-describedby="emailHelp">--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <div class="col-md-6 mb-3">--}}
    {{--            <label class="form-label">Отчество</label>--}}
    {{--            <input placeholder="Отчество" type="text" name="patronymic" class="form-control" aria-describedby="emailHelp">--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <div class="col-md-6 mb-3">--}}
    {{--            <label class="form-label">Логин</label>--}}
    {{--            <input placeholder="Логин" required type="text" name="login" class="form-control" aria-describedby="emailHelp">--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <div class="col-md-6 mb-3">--}}
    {{--            <label class="form-label">Email</label>--}}
    {{--            <input placeholder="Email" required type="email" name="email" class="form-control" aria-describedby="emailHelp">--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <div class="col-md-6 mb-3">--}}
    {{--            <label class="form-label">Пароль</label>--}}
    {{--            <input placeholder="Пароль" required type="password" name="password" class="form-control" aria-describedby="emailHelp">--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <div class="col-md-6 mb-3">--}}
    {{--            <label class="form-label">Повторение пароля</label>--}}
    {{--            <input placeholder="Повторение пароля" required type="password" name="password_repeat" class="form-control" aria-describedby="emailHelp">--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <div class="col-md-6 mb-3 form-check">--}}
    {{--            <input type="checkbox" name="rules" class="form-check-input" id="exampleCheck1">--}}
    {{--            <label class="form-check-label" for="exampleCheck1">Согласие с правилами регистрации</label>--}}
    {{--            <span class="text-danger"></span>--}}
    {{--        </div>--}}
    {{--        <button type="submit" class="btn btn-primary">Создать аккаунт</button>--}}
    {{--    </form>--}}
    <div class="sign-in">
        <div class="vxod">
            <div class="sign-form">
                <div class="form-info">
                    <img class="sign-i" src="public/img/free-icon-user-1177443 (1).png" alt="">
                </div>
                <div class="form1">
                    <h2>Регистрация</h2>
                    <form class="register-form container">

                        @method('post')
                        @csrf
                        <div class="form-row">
                            <div class="col-md-4 mb-3">
                                <input placeholder="Фамилия" required type="text" name="surname" class="form-control"
                                       aria-describedby="emailHelp">
                                <span class="text-danger"></span>
                            </div>
                            <div class=" col-md-3 mb-3">
                                <input placeholder="Имя" required type="text" name="name"
                                       class="form-control" aria-describedby="emailHelp">
                                <span class="text-danger"></span>
                            </div>
                            <div class="col-md-5 mb-3">
                                <input placeholder="Отчество" type="text" name="patronymic" class="form-control"
                                       aria-describedby="emailHelp">
                                <span class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input placeholder="Логин" required type="text" name="login" class="form-control"
                                       aria-describedby="emailHelp">
                                <span class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input placeholder="Email" required type="email" name="email" class="form-control"
                                       aria-describedby="emailHelp">
                                <span class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mb-3">
                                <input placeholder="Пароль" required type="password" name="password"
                                       class="form-control" aria-describedby="emailHelp">
                                <span class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mb-3">
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

                        </div>
                        <button type="submit" class="btn btn-primary">Создать аккаунт</button>
                    </form>
                </div>
            </div>
        </div>
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
