@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        @foreach($posts as $index => $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $post->image }}" class="card-img-top" alt="Hình ảnh">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        <a href="#" class="btn btn-primary">Xem thêm</a>
                    </div>
                </div>
            </div>

            {{-- Xuống dòng sau mỗi 3 cột --}}
            @if (($index + 1) % 3 == 0)
                </div><div class="row">
            @endif
        @endforeach
    </div>
</div>
@endsection
