<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('viewhome');
    }
    public function search()
    {
        return view('about');
    }
}
