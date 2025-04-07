 @extends('layouts.app') 


 @section('content')
 @section('head')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
@endsection
<div class="about-container">
    <!-- Phần giới thiệu -->
    <section class="intro">
        <h1>VỀ CHÚNG TÔI</h1>
        <p>Trang Giới Thiệu Chính Thức</p>
        <div class="intro-content">
            <div class="intro-text">
                <h2><span>20</span> Năm Thành Lập & Phát Triển</h2>
                <p>Chúng tôi đã trải qua hơn 20 năm phát triển và trở thành một trong những thương hiệu hàng đầu. Cam kết cung cấp sản phẩm chất lượng cao, đảm bảo sự hài lòng của khách hàng.</p>
            </div>
            <div class="intro-media">
                <img src="{{ asset('images/intro-image.jpg') }}" alt="Giới thiệu">
                <div class="video-play">
                    <a href="#"><i class="fa fa-play"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Cột mốc thời gian -->
    <section class="timeline-section">
        <h2>CỘT MỐC PHÁT TRIỂN</h2>
        <div class="timeline">
            <div class="timeline-item left">
                <div class="content">
                    <h3>2007</h3>
                    <p>Thành lập công ty TNHH Thực Phẩm Sạch</p>
                    <img src="{{ asset('images/2007.jpg') }}" alt="2007">
                </div>
            </div>
            <div class="timeline-item right">
                <div class="content">
                    <h3>2012</h3>
                    <p>Đổi tên thành Công Ty TNHH Thực Phẩm Sạch</p>
                    <img src="{{ asset('images/2012.jpg') }}" alt="2012">
                </div>
            </div>
            <div class="timeline-item left">
                <div class="content">
                    <h3>2013</h3>
                    <p>Thêm chi nhánh mới tại Hà Nội</p>
                    <img src="{{ asset('images/2013.jpg') }}" alt="2013">
                </div>
            </div>
            <div class="timeline-item right">
                <div class="content">
                    <h3>2014</h3>
                    <p>Thành lập chi nhánh Bắc Ninh</p>
                    <img src="{{ asset('images/2014.jpg') }}" alt="2014">
                </div>
            </div>
            <div class="timeline-item left">
                <div class="content">
                    <h3>2018</h3>
                    <p>Mở rộng hệ thống phân phối toàn quốc</p>
                    <img src="{{ asset('images/2018.jpg') }}" alt="2018">
                </div>
            </div>
            <div class="timeline-item right">
                <div class="content">
                    <h3>2020-2021</h3>
                    <p>Đầu tư hệ thống sản xuất và phân phối hiện đại</p>
                    <img src="{{ asset('images/2020-2021.jpg') }}" alt="2020-2021">
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
