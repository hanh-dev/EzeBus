<header>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul>
                <li><a href="/" class="nav-link">Trang chủ</a></li>
                <li><a href="#" class="nav-link">Giới thiệu</a></li>
                <li><a href="#" class="nav-link">Dịch vụ</a></li>
                <li><a href="#" class="nav-link">Tra cứu</a></li>
                <li><a href="#" class="nav-link">Tin tức</a></li>
                <li><a href="#" class="nav-link">Liên hệ</a></li>
            </ul>
        </nav>
        <div class="user-profile">
            <a href="{{ route('profile') }}">
                <img src="{{ asset('images/user-icon.png') }}" alt="User Profile">
            </a>
        </div>
    </div>
</header>
