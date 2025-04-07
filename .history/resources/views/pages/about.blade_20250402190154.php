 @extends('layouts.app') 


 @section('content')
 @section('head')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
@endsection

<div class="about-container">
    <section class="intro">
        <h1>Về Chúng Tôi</h1>
        <p>Chúng tôi là nền tảng đặt xe hàng đầu, cung cấp dịch vụ an toàn, tiện lợi và đáng tin cậy.</p>
        <img src="{{ asset('images/about-intro.jpg') }}" alt="Giới thiệu">
    </section>

    <section class="timeline">
        <h2>Các Cột Mốc Quan Trọng</h2>
        <div class="timeline-item">
            <span>2015</span> - Thành lập công ty với mục tiêu kết nối khách hàng với tài xế nhanh chóng.
        </div>
        <div class="timeline-item">
            <span>2018</span> - Mở rộng dịch vụ ra toàn quốc.
        </div>
        <div class="timeline-item">
            <span>2022</span> - Đạt 10 triệu chuyến đi an toàn.
        </div>
    </section>

    <section class="mission">
        <h2>Sứ Mệnh & Tầm Nhìn</h2>
        <p>Chúng tôi hướng đến việc tạo ra một nền tảng đặt xe minh bạch, nhanh chóng và hiệu quả cho khách hàng.</p>
        <img src="{{ asset('images/mission.jpg') }}" alt="Sứ mệnh">
    </section>

    <section class="values">
        <h2>Giá Trị Cốt Lõi</h2>
        <ul>
            <li>🚗 An Toàn & Tin Cậy</li>
            <li>⚡ Nhanh Chóng & Tiện Lợi</li>
            <li>💡 Đổi Mới & Sáng Tạo</li>
            <li>❤️ Tận Tâm Với Khách Hàng</li>
        </ul>
        <img src="{{ asset('images/values.jpg') }}" alt="Giá trị cốt lõi">
    </section>
</div>
@endsection
