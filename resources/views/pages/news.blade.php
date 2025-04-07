@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Tin tức</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($posts as $post)
            <div class="bg-white rounded shadow p-4 hover:shadow-lg transition">
                <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-48 object-cover rounded mb-4">
                <div>
                    <h5 class="text-xl font-semibold">{{ $post['title'] }}</h5>
                    <p class="text-sm text-gray-500 mb-2">
                        {{ \Carbon\Carbon::parse($post['created_at'])->format('d F, Y') }} • {{ rand(0, 500) }} Comments
                    </p>
                    <p class="text-gray-700 mb-3">{{ \Illuminate\Support\Str::limit($post['content'], 100) }}</p>
                    <a href="{{ route('posts.show', $post['id']) }}" class="text-blue-600 hover:underline">Xem thêm &gt;&gt;</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
