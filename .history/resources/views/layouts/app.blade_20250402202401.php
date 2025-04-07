<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
     <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
     <link rel="stylesheet" href="{{ asset('css/about.css') }}"><link rel="stylesheet" href="{{ asset('css/dichvu.css') }}">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
    
</head>
<body>

    @include('components.header')

    <main class="">
        @yield('content')
    </main>
  @include('components.footer')
</body>
</html>
