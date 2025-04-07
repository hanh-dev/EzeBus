<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Kreait\Laravel\Firebase\Facades\Firebase as FacadesFirebase;

class AuthController extends Controller
{
    public function index() {
        $users = User::all();
        return response()->json(['users' => $users]);
        // return view('pages.users', ['users'=>$users]);
    }

    public function store(Request $request) {
        $email = $request->input('email');
        $exist = User::where('email', $email)->first();
        if ($exist) {
            return redirect()->back()->withErrors(['email' => 'Email is already taken'])->withInput();
        }

        $name = $request->input('name');
        $password = $request->input('password');

        $newUser = [
            'name' => $name,
            'email' => $email,
            'password' =>  Hash::make($password)
        ];

        User::create($newUser);
        return redirect()->route('viewLogin')->with('success', 'Account created successfully. Please log in.');
    }

    public function getLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $email = $request->input('email');
        $password = $request->input('password');
        $user = User::where('email', $email)->first();

        if(!$user) {
            return response()->json(['success' => false, 'message' => "User not found"], 400);
        }

        if(!Hash::check($password, $user->password)) {
            return response()->json(['success' => false, 'message' => "Invalid password"], 400);
        }

        session([
            'user_email' => $email,
        ]);

        return redirect()->route('home')->with(['message' => 'Logged in successfully']);
    }
}
