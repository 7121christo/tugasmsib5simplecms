@extends('layouts.base')

@section('content')
<h1>{{ $kategori->namaKategori }}</h1>

@foreach($kategori->courses as $course)
<div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="flush-heading{{ $course->id }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $course->id }}" aria-expanded="false" aria-controls="flush-collapse{{ $course->id }}">
                <p>{{ $course->namaCourse }}</p>
            </button>
        </h2>
        <div id="flush-collapse{{ $course->id }}" class="accordion-collapse collapse" aria-labelledby="flush-heading{{ $course->id }}" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">
                @foreach($course->lessons as $lesson)
                    {{ $lesson->judul }}<br>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
