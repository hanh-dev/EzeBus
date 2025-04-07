<?php

namespace App\Http\Controllers;



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
public function
    // public function send(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required',
    //         'phone' => 'required',
    //         'email' => 'required|email',
    //         'subject' => 'required',
    //         'message' => 'required',
    //     ]);

    //     // Xử lý gửi email (Tùy chỉnh theo mail server)
    //     Mail::raw("Tiêu đề: {$request->subject}\nNội dung: {$request->message}", function ($mail) use ($request) {
    //         $mail->to('admin@example.com') // Đổi thành email nhận
    //             ->subject("Liên hệ từ: {$request->name} ({$request->email})");
    //     });

    //     return back()->with('success', 'Gửi thành công! Chúng tôi sẽ liên hệ sớm nhất.');
    // }
}
