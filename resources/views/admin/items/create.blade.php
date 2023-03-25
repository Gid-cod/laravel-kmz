@extends('admin.index')

@section('title', 'Создание товара')

@section('content')
<h2 class="mt-2">Создание товара</h2>

<form method="post" action="{{route('admin.items.create')}}" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Название товара</label>
        <input required type="text" name="name" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Год производства товара</label>
        <input required type="text" name="model_year" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Страна производства товара</label>
        <input required type="text" name="model_country" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Модель товара</label>
        <input required type="text" name="model_type" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Краткое описание товара </label>
        <textarea class="form-control" required name="Short_description" aria-label="With textarea"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Описание товара </label>
        <textarea class="form-control" required name="info" aria-label="With textarea"></textarea>
    </div>
    <div class="mb-3">
        <label class="form-label">Цена товара</label>
        <input required type="text" name="price" class="form-control">
    </div>
    <div class="mb-3">
        <label class="form-label">Количество товара</label>
        <input required type="number" name="available" class="form-control">
    </div>
    <div class="mb-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="input-group-text">Категория товара</label>
            </div>
            <select required name="category_id" class="custom-select" aria-label="Default select example">
                <option value="">Все</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="mb-3">
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="inputGroupFileAddon01">Изображение товара</span>
            </div>
            <div class="custom-file">
                <input required name="image" type="file" class="custom-file-input" id="inputGroupFile01" accept="image/jpeg,image/png,image/jpg,image/bpm" aria-describedby="inputGroupFileAddon01">
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
@endsection
