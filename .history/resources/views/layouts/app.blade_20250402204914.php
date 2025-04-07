<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Trang chủ')</title>
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
     <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
     <link rel="stylesheet" href="{{ asset('css/about.css') }}">
     <link rel="stylesheet" href="{{ asset('css/dichvu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>

    @include('components.header')

    <main class="">
        @yield('content')
    </main>
  @include('components.footer')
</body>
</html>
