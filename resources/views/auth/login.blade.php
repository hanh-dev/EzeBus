<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
    <div class="container">
        <form class="signup-form" method="POST" action="{{ url('/login') }}">
            @csrf
            <h2>Login</h2>
            <p>Welcome back to the app</p>
            <label>Email</label>
            <input type="email" id="email" placeholder="Enter your email" name="email">
            <label>Password</label>
            <input type="password" id="password" placeholder="Enter your password" name="password">
            <button type="submit" class="signin-btn">Sign in</button>
            <p class="or-text">or sign in with</p>
            <button type="button" class="google-btn" id="googleLogin">
                <img src="{{ asset('image/google.png') }}" alt="Google"> Continue with Google
            </button>
            <p class="login-text">Create an account? <a href="/register">Sign up here</a></p>
        </form>
    </div>
</body>

<script type="module" src="{{ asset('js/google.js') }}"></script>
</html>