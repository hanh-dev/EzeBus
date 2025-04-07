 @extends('layouts.app') 


 @section('content')
 @section('head')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
@endsection
<div class="about-container">
    <!-- Giới thiệu chung -->
    <section class="intro">
        <h1>Về Chúng Tôi</h1>
        <p>Chúng tôi là nền tảng đặt xe hàng đầu, mang đến trải nghiệm tiện lợi và an toàn.</p>
        <img src="{{ asset('images/about-banner.jpg') }}" alt="Giới thiệu">
    </section>

    <!-- Cột mốc thời gian -->
    <section class="timeline-section">
        <h2>Cột Mốc Quan Trọng</h2>
        <div class="timeline">
            <div class="timeline-item">
                <h3>2015</h3>
                <p>Thành lập công ty với 10 xe khách đầu tiên.</p>
            </div>
            <div class="timeline-item">
                <h3>2018</h3>
                <p>Mở rộng tuyến đường Bắc - Nam, đầu tư thêm 50 xe.</p>
            </div>
            <div class="timeline-item">
                <h3>2020</h3>
                <p>Ra mắt hệ thống đặt vé trực tuyến, nâng cấp dịch vụ.</p>
            </div>
            <div class="timeline-item">
                <h3>2022</h3>
                <p>Đạt 1 triệu lượt khách, mở rộng hợp tác toàn quốc.</p>
            </div>
        </div>
    </section>

    <!-- Nhiệm vụ & Sứ mệnh -->
    <section class="mission">
        <h2>Nhiệm Vụ & Sứ Mệnh</h2>
        <p>Đảm bảo an toàn, tiện lợi và giá cả hợp lý cho mọi khách hàng.</p>
        <img src="{{ asset('images/mission.jpg') }}" alt="Nhiệm vụ">
    </section>

    <!-- Giá trị cốt lõi -->
    <section class="values">
        <h2>Giá Trị Cốt Lõi</h2>
        <div class="value-list">
            <div class="value-item">
                <h3>An Toàn</h3>
                <p>Chúng tôi cam kết mang lại chuyến đi an toàn nhất.</p>
            </div>
            <div class="value-item">
                <h3>Tiện Lợi</h3>
                <p>Hệ thống đặt vé nhanh chóng, dễ dàng sử dụng.</p>
            </div>
            <div class="value-item">
                <h3>Đáng Tin Cậy</h3>
                <p>Phục vụ tận tâm, đảm bảo quyền lợi khách hàng.</p>
            </div>
        </div>
    </section>
</div>
@endsection

