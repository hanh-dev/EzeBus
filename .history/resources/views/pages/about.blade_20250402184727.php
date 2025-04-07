 @extends('layouts.app') 


 @section('content')
 @section('head')
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
@endsection
<div class="container my-5">
    <h2 class="text-center font-weight-bold">GIỚI THIỆU VỀ TÂN QUANG DŨNG</h2>
    
    <div class="row mt-4">
        <!-- Cột bên trái: Nội dung giới thiệu -->
        <div class="col-md-6">
            <h4 class="font-weight-bold">CÔNG TY TÂN QUANG DŨNG LIMOUSINE</h4>
            <p>
                Với kinh nghiệm ngành vận tải từ những năm 90, trải qua gần 20 năm vận hành, đã cho ra thương hiệu Tân Quang Dũng
                với cách thức hoạt động tiên tiến, dàn xe mới cùng đội ngũ chất lượng...
            </p>
            <p>
                Có mặt khắp các tỉnh thành: Hồ Chí Minh, Hà Nội, Đà Nẵng, Nha Trang, Đà Lạt, Bình Dương...
            </p>
            <p>
                Luôn lấy sự hài lòng của khách hàng là thước đo cho sự phát triển của doanh nghiệp...
            </p>
            <p><strong>HOTLINE: <span class="text-warning">19006053</span></strong></p>
        </div>

        <!-- Cột bên phải: Danh sách tiện ích -->
        <div class="col-md-6">
            <div class="row">
                @php
                    $features = [
                        ['icon' => 'wifi', 'title' => 'Free Wifi'],
                        ['icon' => 'battery-charging', 'title' => 'Cổng sạc Điện Thoại, Laptop'],
                        ['icon' => 'play-circle', 'title' => 'Giải trí'],
                        ['icon' => 'snowflake', 'title' => 'Điều Hoà'],
                        ['icon' => 'wine', 'title' => 'Nước uống'],
                        ['icon' => 'hammer', 'title' => 'Búa phá kính'],
                        ['icon' => 'car', 'title' => 'Xe Trung Chuyển'],
                        ['icon' => 'tooth', 'title' => 'Kem Đánh Răng']
                    ];
                @endphp
                
                @foreach ($features as $feature)
                <div class="col-6 d-flex align-items-center mb-3">
                    <i class="bi bi-{{ $feature['icon'] }} text-warning fs-3 me-2"></i>
                    <span>{{ $feature['title'] }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
