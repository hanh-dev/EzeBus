<?php

namespace App\Http\Controllers;

use App\Models\Post;


use Illuminate\Http\Request;

class PageController extends Controller
{
    private $posts = [
        ['id' => 1, 'title' => 'Laravel là gì?', 'content' => 'Laravel là một PHP framework mạnh mẽ...'],
        ['id' => 2, 'title' => 'Tại sao nên dùng Laravel?', 'content' => 'Laravel giúp bạn phát triển web nhanh hơn...'],
        ['id' => 3, 'title' => 'Blade template là gì?', 'content' => 'Blade là hệ thống template của Laravel...'],
    ];
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }
    public function dichvu()
    {
        return view('pages.dichvu');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function news()
    {
        return view('pages.news',);
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.show', compact('post'));
    }
}
