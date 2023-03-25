@extends('admin.index')

@section('title', 'Категории')

@section('content')

    <a href="{{route('admin.categories.createPage')}}" class="btn btn-success mt-3">Создать категорию</a>

        @forelse($categories as $category)
            <div class="card col-4 flex-row align-items-center mt-3">
                <div class="card-body">
                   {{$category->name}}
                </div>
                <div class="card-text">
                    <a href="{{route('admin.categories.delete', $category)}}" class="btn btn-danger ml-4">Удалить</a>
                </div>
            </div>
        @empty
            <div class="alert alert-primary  mt-3" role="alert">
                Категорий нет
            </div>
        @endforelse

@endsection
