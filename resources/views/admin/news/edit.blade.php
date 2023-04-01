@extends('admin.index')

@section('title', 'Редактирование товара')

@section('content')
    <form method="post" action="{{route('admin.news.edit', $news)}}" enctype="multipart/form-data">
        @method('post')
        @csrf
        <div class="mb-3">
            <label class="form-label">Название товара</label>
            <input required value="{{$news->name}}" type="text" name="name" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label">Краткое описание товара </label>
            <textarea class="form-control" required name="Short_description" aria-label="With textarea">{{$news->Short_description}}</textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Описание товара </label>
            <textarea class="form-control" required  name="info" aria-label="With textarea">{{$news->info}}</textarea>
        </div>
        <div class="mb-3">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <label class="input-group-text">Категория товара</label>
                </div>
                <select required name="category_id" class="custom-select" aria-label="Default select example">
                    @foreach($categories as $category)
                        <option @if($category->id === $news->category_id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
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
                    <label class="custom-file-label" for="inputGroupFile01">Выберите файл</label>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Обновить</button>
    </form>
@endsection
