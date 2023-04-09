@extends('admin.index')

@section('title', 'Категории')

@section('content')
    <a href="{{route('admin.categories.createPage')}}" class="btn btn-success mt-3">Создать категорию</a>
    <table class="table table-hover">

        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col"></th>

        </tr>
        </thead>
        @forelse($categories as $category)
        <tbody>
        <tr>
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td><a href="{{route('admin.categories.delete', $category)}}" class="btn btn-danger ml-4">Удалить</a></td>
        </tr>
        @empty
            <div class="alert alert-primary  mt-3" role="alert">
                Категорий нет
            </div>
        @endforelse
        </tbody>
    </table>

{{--        <div class="card col-4 flex-row align-items-center mt-3">--}}
{{--            <div class="card-body">--}}
{{--                --}}
{{--            </div>--}}
{{--            <div class="card-text">--}}
{{--                --}}
{{--            </div>--}}
{{--        </div>--}}

@endsection
