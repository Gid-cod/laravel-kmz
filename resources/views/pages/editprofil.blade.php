@extends('app')

@section('title', 'Профиль')

@section('content')

    <div class="container">
        <h1>Изменить информацию</h1>




        <form action="{{ route('profile.update', $user->id) }}" enctype="multipart/form-data" method="post">
            @csrf
            @method('post')
            <label for="photo">Обложка</label>
            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Загрузка</span>
                </div>
                <div class="custom-file file-select">
                    <input type="file" class="custom-file-input " id="file-input"  name="photo_cover" >
                    <label class="custom-file-label file-name"  >Выбрать файл</label>
                </div>

            </div>
            <label for="photo">Фото профиля</label>
            <div class="input-group mb-3">

                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroupFileAddon01">Загрузка</span>
                </div>
                <div class="custom-file file-upload-select">
                    <input type="file" class="custom-file-input " id="file-upload-input"  name="photo" >
                    <label class="custom-file-label file-select-name"  >Выбрать файл</label>
                </div>

            </div>
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$user->name}}" required>
            </div>
            <div class="form-group">
                <label for="surname">Фамилия</label>
                <input type="text" class="form-control" id="surname" name="surname" value="{{$user->surname}}" required>
            </div>
            <div class="form-group">
                <label for="patronymic">Отчество</label>
                <input type="text" class="form-control" id="patronymic" name="patronymic" value="{{$user->patronymic}}" required>
            </div>
            <div class="form-group">
                <label for="telephone">Номер телефона</label>
                <input type="tel" class="form-control" id="telephone" name="telephone" value="{{$user->telephone}}">
            </div>
            <div class="form-group">
                <label for="birthday">Дата рождения</label>
                <input type="date" class="form-control" id="birthday" name="birthday" value="{{$user->birthday}}" required>
            </div>
            <div class="form-group">
                <label for="email">Адрес электронной почты</label>
                <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>




@endsection
