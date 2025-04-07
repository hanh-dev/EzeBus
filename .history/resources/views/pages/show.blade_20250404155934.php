@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">{{ $post['title'] }}</h1>
    <p class="text-sm text-gray-500 mb-4">
        {{ \Carbon\Carbon::parse($post['created_at'])->format('d F, Y') }}
    </p>
    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-64 object-cover rounded mb-6">
    <p class="text-lg text-gray-800 leading-relaxed">{{ $post['content'] }}</p>
    <a href="{{ route('posts.index') }}" class="inline-block mt-6 text-blue-600 hover:underline">← Quay lại danh sách</a>
</div>
@endsection
