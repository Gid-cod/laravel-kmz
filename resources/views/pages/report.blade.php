@extends('app')

@section('title','Отчеты по СОУТ')

@section('content')
    <div class="container">
        <h3 class="mt-5">Отчеты о результатах проведения специальной оценки условий труда (СОУТ)</h3>
        @forelse ($files as $file)
            <div class="media align-items-center text-muted pt-3">
                    @if ($file->filepath && Storage::exists($file->filepath))
                        <a class="tooltip-show" href="{{ route('admin.files.download', ['id' => $file->id]) }}" ><i style="font-size: 3rem" data-toggle="tooltip" data-placement="left" title="Скачать" class="icon-download tooltip-show"></i></a>
                    @endif
                <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray">
                    {{ $file->filename }}
                </p>
            </div>
        @empty
        @endforelse

    </div>

@endsection
