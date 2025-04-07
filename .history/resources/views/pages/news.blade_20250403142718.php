@extends('layouts.app')

@section('content')
<div class="news-container">
    <h1 class="text-3xl font-bold mb-6">Tin tức</h1>
    <div class="news-grid">
        @foreach($posts as $post)
            <div class="news-card">
                <img src="{{ $post->image }}" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="meta">{{ \Carbon\Carbon::parse($post->created_at)->format('d F, Y') }} /// {{ rand(0, 500) }} Comments</p>
                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    <a href="#" class="btn">Xem thêm >></a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
