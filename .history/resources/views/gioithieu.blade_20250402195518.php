 @extends('layouts.app') 
 @section('content')
<div class="about-container">
    <!-- Phần giới thiệu -->
    <section class="intro">
        <h1>VỀ CHÚNG TÔI</h1>
        <div class="intro-content">
            <div class="intro-text">
                <h2><span>2</span> Năm Thành Lập & Phát Triển</h2>
                <p>EzeBus là một trong những công ty hàng đầu trong ngành vận tải hành khách, chuyên cung cấp các dịch vụ xe khách chất lượng cao, an toàn và tiện nghi. Với đội ngũ lái xe chuyên nghiệp và các phương tiện hiện đại, chúng tôi cam kết mang đến cho khách hàng những chuyến đi thoải mái và an tâm nhất. Chúng tôi luôn nỗ lực cải thiện và nâng cao chất lượng dịch vụ, từ việc đảm bảo an toàn trên mỗi chuyến đi đến việc tối ưu hóa trải nghiệm khách hàng với các dịch vụ linh hoạt và tiện ích như wifi miễn phí, ghế ngồi thoải mái, và không gian sạch sẽ, rộng rãi. EzeBus luôn đặt sự hài lòng của khách hàng lên hàng đầu, đồng thời cam kết duy trì một môi trường vận hành thân thiện với môi trường.</p>
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
    {{-- <section class="timeline-section">
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
    </section> --}}
    <!-- Tầm Nhìn & Sứ Mệnh -->
<section class="vision-mission">
    <div class="vision">
        <div class="icon">
            <img src="{{ asset('images/eye-icon.png') }}" alt="Tầm Nhìn">
        </div>
        <h3>TẦM NHÌN</h3>
        <p>Định hướng phát triển thành đơn vị cung ứng thực phẩm sạch nhập khẩu, chất lượng hàng đầu trong nước trong trung hạn và xây dựng được thương hiệu trên trường quốc tế trong dài hạn.</p>
    </div>
    <div class="mission">
        <div class="icon">
            <img src="{{ asset('images/mission-icon.png') }}" alt="Sứ Mệnh">
        </div>
        <h3>SỨ MỆNH</h3>
        <p>Chúng tôi làm hài lòng khách hàng bằng cách mang đến dịch vụ, sản phẩm chất lượng cao với tiêu chí an toàn vệ sinh thực phẩm và đội ngũ nhân viên tận tình, thân thiện, có chuyên môn.</p>
    </div>
    <div class="image">
        <img src="{{ asset('images/vision-mission.png') }}" alt="Tầm Nhìn - Sứ Mệnh">
    </div>
</section>

</div>
@endsection
