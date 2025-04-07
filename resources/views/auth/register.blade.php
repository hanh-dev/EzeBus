<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>

    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
</head>
<body>
    <div class="container">
        <form class="signup-form" method="POST" action="{{ url('/add-users') }}">
            @csrf
            <h2>Create an account</h2>
            <p>Welcome to the app</p>
            <label>Name</label>
            <input type="text" placeholder="Enter your name" name="name">
            <label>Email</label>
            <input type="email" placeholder="Enter your email" name="email">
            <label>Password</label>
            <input type="password" placeholder="Enter your password" name="password">
            <button class="signup-btn" type="submit">Sign up</button>
            <p class="or-text">or sign up with</p>
            <button type="button" class="google-btn" id="googleLogin">
                <img src="{{ asset('image/google.png') }}" alt="Google"> Continue with Google
            </button>
            <p class="login-text">Already have an account? <a href="/login">Sign in here</a></p>
        </form>
    </div>
</body>
<script type="module" src="{{ asset('js/google.js') }}"></script>
</html>