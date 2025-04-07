@extends('layouts.app')
@section('content')

<div class="container">
    <h1 class="text-3xl font-bold mb-6">Tin tức</h1>
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $post->image }}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title font-bold">{{ $post->title }}</h5>
                        <p class="text-muted">{{ \Carbon\Carbon::parse($post->created_at)->format('d F, Y') }} /// {{ rand(0, 500) }} Comments</p>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        <a href="#" class="btn btn-primary">Xem thêm >></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
