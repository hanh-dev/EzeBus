<header>
    <div class="header-container">
        <div class="logo">
            <img src="{{ asset('images/EzeBusLogo.png') }}" alt="Logo">
        </div>
        <nav>
            <ul>
    <li><a href="{{ url('/home') }}" class="nav-link">Trang chủ</a></li>
    <li><a href="{{ url('/about') }}" class="nav-link">Giới thiệu</a></li>
    <li><a href="{{ url('/dich-vu') }}" class="nav-link">Dịch vụ</a></li>
    <li><a href="{{ url('/news') }}" class="nav-link">Tin tức</a></li>
    <li><a href="{{ url('/contact') }}" class="nav-link">Liên hệ</a></li>
</ul>

        </nav>
        <div class="header-right">
            <div class="hotline">
                <a href="tel:19006053">
                    <span class="phone-icon">📞</span> 19006053
                </a>
            </div>
            <div class="user-profile">
                <a href="{{ route('profile') }}">
                    <img src="{{ asset('images/user-icon.png') }}" alt="User Profile">
                </a>
            </div>
        </div>
    </div>
</header>
