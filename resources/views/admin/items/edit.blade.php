@extends('admin.index')

@section('title', 'Редактирование товара')

@section('content')
    <form class="mb-3 mt-3" method="post" action="{{route('admin.items.edit', $item)}}" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="mb-3">
            <label class="form-label">Название товара</label>
            <input required value="{{$item->name}}" type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Год производства товара</label>
            <input required value="{{$item->model_year}}" type="text" name="model_year" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Страна производства товара</label>
            <input required value="{{$item->model_country}}" type="text" name="model_country" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Модель товара</label>
            <input required value="{{$item->model_type}}" type="text" name="model_type" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Краткое описание товара </label>
            <textarea class="form-control" required name="Short_description" aria-label="With textarea">{{$item->Short_description}}</textarea>

        </div>
        <div class="mb-3">
            <label class="form-label">Описание товара </label>
            <textarea class="form-control" required  name="info" aria-label="With textarea">{{$item->info}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Цена товара</label>
            <input required value="{{$item->price}}" type="number" name="price" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Количество товара</label>
            <input required value="{{$item->available}}" type="number" name="available" class="form-control">
        </div>
        <div class="mb-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Категория товара</label>
                </div>
                <select required name="category_id" class="custom-select" aria-label="Default select example">
                    @foreach($categories as $category)
                        <option @if($category->id === $item->category_id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
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
                    <input  name="image" type="file" class="custom-file-input" id="inputGroupFile01" accept="image/jpeg,image/png,image/jpg,image/bpm" aria-describedby="inputGroupFileAddon01">
                    <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i> Обновить</button>
    </form>
@endsection
