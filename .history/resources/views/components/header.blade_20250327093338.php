<header class="bg-dark py-3">
    <div class="container d-flex justify-content-between align-items-center ">
        <!-- Logo -->
        <a href="{{ url('/') }}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" height="50">
        </a>

        <!-- Menu -->
        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link text-white" href="{{ url('/') }}">Trang chủ</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" data-bs-toggle="dropdown">Giới Thiệu</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Về chúng tôi</a></li>
                        <li><a class="dropdown-item" href="#">Lịch sử</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" data-bs-toggle="dropdown">Dịch vụ</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Dịch vụ 1</a></li>
                        <li><a class="dropdown-item" href="#">Dịch vụ 2</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-white dropdown-toggle" href="#" data-bs-toggle="dropdown">Tra cứu</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Tra cứu đơn hàng</a></li>
                        <li><a class="dropdown-item" href="#">Tra cứu giá</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Tin tức</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="#">Liên hệ</a></li>
            </ul>
        </nav>

        <!-- Hotline -->
      
    </div>
</header>
