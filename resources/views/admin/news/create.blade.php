@extends('admin.index')

@section('title', 'Создание товара')

@section('content')
<h2 class="mt-2">Создание новости</h2>

<form method="post" action="{{route('admin.news.create')}}" enctype="multipart/form-data">
    @csrf
    @method('post')
    <div class="mb-3">
        <label class="form-label">Заголовок</label>
        <input required type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Краткое описание </label>
        <textarea class="form-control" required name="Short_description" aria-label="With textarea"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Полное описание</label>
        <textarea class="form-control" required name="info" aria-label="With textarea"></textarea>
    </div>
    <div class="mb-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Категория</label>
            </div>
            <select required name="type_id" class="custom-select" aria-label="Default select example">
                <option value="">Все</option>
                @foreach($types as $types)
                    <option value="{{$types->id}}">{{$types->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Изображение новости</span>
            </div>
            <div class="custom-file">
                <input required name="image" type="file" class="custom-file-input" id="inputGroupFile01" accept="image/jpeg,image/png,image/jpg,image/bpm" aria-describedby="inputGroupFileAddon01">
                <label class="custom-file-label" for="inputGroupFile01">Выбрать файл</label>
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
@endsection
