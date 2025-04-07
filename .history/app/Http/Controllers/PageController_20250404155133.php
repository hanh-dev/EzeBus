<?php

namespace App\Http\Controllers;

use App\Models\Post;


use Illuminate\Http\Request;

class PageController extends Controller
{
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
        return view('pages.news');
    }
    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('pages.show', compact('post'));
    }
}
