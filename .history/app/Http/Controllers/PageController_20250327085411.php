<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('view.home');
    }
    public function search()
    {
        return view('about');
    }
}
