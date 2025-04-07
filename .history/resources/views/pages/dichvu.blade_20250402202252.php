@extends('layouts.app')

@section('content')
<div class="service-container">
    <h1 class="service-title">DỊCH VỤ VẬN TẢI HÀNH KHÁCH</h1>
    
    <h2 class="service-subtitle">Giới thiệu dịch vụ</h2>
    <p class="service-description">
        Chúng tôi tạo dựng nên những giá trị mới cho dịch vụ Vận chuyển hành khách và Xe hợp đồng.
        Cùng với đội ngũ nhân viên chuyên nghiệp, giàu kinh nghiệm trong lĩnh vực vận tải hành khách
        và hệ thống xe cao cấp từ dòng Limousine đời mới nhất.
    </p>
    
    <div class="service-content">
        <div class="service-image">
            <img src="{{ asset('images/IMG_1730.png') }}" alt="Dịch vụ vận tải">
        </div>
        <div class="service-benefits">
            <h3>Tiện ích dịch vụ</h3>
            <ul>
                <li><strong>Êm ái:</strong> Công nghệ động cơ mới, nội thất cao cấp, vận hành linh hoạt, êm ái.</li>
                <li><strong>Cao cấp:</strong> Hàng ghế rộng rãi, thoải mái theo tiêu chuẩn thương gia.</li>
                <li><strong>An toàn:</strong> Sở hữu trang thiết bị tiện nghi chỉ có trên dòng xe cao cấp.</li>
            </ul>
        </div>
    </div>
</div>
@endsection

<style>
.service-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 40px;
    font-family: Arial, sans-serif;
}
.service-title {
    font-size: 36px;
    font-weight: bold;
    text-transform: uppercase;
}
.service-subtitle {
    font-size: 24px;
    font-weight: bold;
}
.service-description {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 20px;
}
.service-content {
    display: flex;
    align-items: center;
    gap: 20px;
}
.service-image img {
    width: 100%;
    max-width: 500px;
    border-radius: 10px;
}
.service-benefits {
    flex: 1;
}
.service-benefits h3 {
    font-size: 22px;
    font-weight: bold;
}
.service-benefits ul {
    list-style-type: none;
    padding: 0;
}
.service-benefits li {
    font-size: 18px;
    margin-bottom: 10px;
}
</style>
