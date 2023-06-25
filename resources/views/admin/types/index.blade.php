@extends('admin.index')

@section('title','создание категории для новостей')

@section('content')
    <h2 class="mt-2">Создание категории для новостей</h2>

    <form action="{{route('admin.types.create')}}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Название категории</label>
            <input required type="text" name="name" class="form-control">
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
        @forelse($types as $types)
            <tbody>
            <tr>
                <th scope="row">{{$types->id}}</th>
                <td>{{$types->name}}</td>
                <td><a href="{{route('admin.types.delete', $types)}}" class="btn btn-danger"><i class="bi bi-trash" style="font-size: 20px"></i>Удалить</a></td>
            </tr>
            @empty
                <div class="alert alert-primary  mt-3" role="alert">
                    Категорий нет
                </div>
            @endforelse
            </tbody>
    </table>
@endsection
