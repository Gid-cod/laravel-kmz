@extends('admin.index')

@section('title','Добавление файла')

@section('content')
    <form action="{{ route('admin.files.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('post')

        <div class="file-upload row mt-5">
            <div class="file-upload-select ml-3">
                <div class="file-select-button">Выберете файл</div>
                <div class="file-select-name">Файл не выбран...</div>
                <input  type="file" name="file" id="file-upload-input" required>
            </div>
            <div>
                <button type="submit" id="success" class=" btn btn-info p-2 "><i class="bi bi-file-earmark-arrow-up" style="font-size: 20px"></i> Загрузить файл</button>
            </div>

        </div>
    </form>
    <div>
        @forelse ($files as $file)
            <div class="media align-items-center text-muted pt-3">

                <h3 class="media-body pb-3 mb-0  lh-125  border-gray">
                    {{ $file->filename }}
                </h3>
                @if ($file->filepath && Storage::exists($file->filepath))
                    <a href="{{ route('admin.files.download', ['id' => $file->id]) }}" class="btn btn-outline-success mr-2"><i class="bi bi-file-earmark-arrow-down" style="font-size: 20px"></i> Скачать</a>
                @endif

                    <a href="{{route('admin.files.delete', $file)}}" class="btn btn-outline-danger"><i class="bi bi-trash" style="font-size: 20px"></i> Удалить</a>
            </div>
        @empty
        @endforelse

    </div>
@endsection
