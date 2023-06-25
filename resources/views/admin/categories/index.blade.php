@extends('admin.index')

@section('title', 'Категории')

@section('content')
    <h2 class="mt-2">Создание категории</h2>

    <form method="post" action="{{route('admin.categories.create')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">Название категории</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary"><i class="bi bi-plus-square" style="font-size: 20px"></i> Создать
        </button>
    </form>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">№</th>
            <th scope="col">Наименование</th>
            <th scope="col"></th>
        </tr>
        </thead>
        @forelse($categories as $category)
            <tbody>
            <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td><a href="{{route('admin.categories.delete', $category)}}" class="btn btn-danger ml-4"><i
                            class="bi bi-trash" style="font-size: 20px"></i> Удалить</a></td>
            </tr>
            @empty
                <div class="alert alert-primary  mt-3" role="alert">
                    Категорий нет
                </div>
            @endforelse
            </tbody>
    </table>
@endsection
