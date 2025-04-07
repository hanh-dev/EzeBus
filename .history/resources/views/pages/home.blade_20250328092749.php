 @extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home page</title>
	<link 

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .slider {
            position: relative;
            width: 100%;
            height: 300px;
            background: url('slider-image.jpg') no-repeat center center/cover;
        }
        .search-container {
            position: absolute;
            bottom: -50px;
            left: 50%;
            transform: translateX(-50%);
            width: 80%;
            max-width: 900px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .form-group {
            margin: 0 10px;
            flex: 1;
        }
        .form-group label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }
        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .btn {
            background-color: #ffc107;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .container {
            max-width: 1100px;
            margin: 80px auto 20px auto;
            padding: 20px;
        }
        .info-box {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin: 20px 0;
        }
        .info-box div {
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
        .route-box {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
        }
        .route {
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            width: 24%;
            text-align: center;
        }
        .facilities {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .facility {
            width: 30%;
            background: white;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
	<div class="container">
   <div class="banner">
        <img src="{{ asset('images/banner.jpg') }}" alt="Banner">
    </div>
    
    <div class="search-container">
        <form action="{{ route('search.bus') }}" method="GET" class="form-container">
        <div class="form-group">
            <label for="from">Nơi đi</label>
            <input type="text" id="from" name="from" placeholder="Nhập nơi đi" required>
        </div>
        <div class="form-group">
            <label for="to">Nơi đến</label>
            <input type="text" id="to" name="to" placeholder="Nhập nơi đến" required>
        </div>
        <div class="form-group">
            <label for="date">Ngày đi</label>
            <input type="date" id="date" name="date" required>
        </div>
        <button type="submit" class="btn">Tìm chuyến đi</button>
    </form>
    </div>
    
    <div class="detail-container">
       
    <div class="title">Đặt vé dễ dàng</div>
    <div class="steps">
        <div class="step">
            <img src="icon1.png" alt="Nhập thông tin">
            <div class="step-title">1. Nhập thông tin</div>
            <div class="step-desc">Bạn vui lòng nhập nơi đi, nơi đến và ngày khởi hành để tìm vé xe.</div>
        </div>
        <div class="arrow">➜</div>
        <div class="step">
            <img src="icon2.png" alt="Chọn chuyến xe">
            <div class="step-title">2. Chọn chuyến xe</div>
            <div class="step-desc">Bạn có thể chọn chuyến xe, chỗ ngồi và nhập thông tin để giữ chỗ.</div>
        </div>
        <div class="arrow">➜</div>
        <div class="step">
            <img src="icon3.png" alt="Thanh toán">
            <div class="step-title">3. Thanh toán</div>
            <div class="step-desc">Thanh toán bằng ví điện tử, thẻ hoặc các phương thức khác.</div>
        </div>
        <div class="arrow">➜</div>
        <div class="step">
            <img src="icon4.png" alt="Khởi hành">
            <div class="step-title">4. Khởi hành</div>
            <div class="step-desc">Hoàn thành các bước để nhận mã vé và chuẩn bị hành lý.</div>
        </div>
    </div>
    </div>
    
    <div class="container">
        <h2>Lộ trình phổ biến</h2>
        <div class="route-list">
            <div class="route-card">
                <img src="bus1.jpg" alt="HCM - Quảng Trị">
                <div class="route-info">
                    <div class="route-title">Quảng Trị ⇄ Hồ Chí Minh</div>
                    <div class="route-divider"></div>
                    <div class="route-details">
                        <strong>4</strong> chuyến/ngày
                        <div class="route-time">Quảng Trị: 06h & 14h</div>
                        <div class="route-time">Sài Gòn: 05h & 11h</div>
                    </div>
                    <div class="route-meta">Thời gian: 18h30’ - Khoảng cách: 1088km</div>
                </div>
                <a href="search?from=Quảng Trị&to=Hồ Chí Minh" class="book-btn">Đặt chỗ</a>
            </div>

            <div class="route-card">
                <img src="bus2.jpg" alt="Quảng Trị - Bình Dương">
                <div class="route-info">
                    <div class="route-title">Quảng Trị ⇄ Bình Dương - Bình Phước</div>
                    <div class="route-divider"></div>
                    <div class="route-details">
                        <strong>2</strong> chuyến/ngày
                        <div class="route-time">Quảng Trị: 14h</div>
                        <div class="route-time">Bình Dương: 07h30</div>
                    </div>
                    <div class="route-meta">Thời gian: 19h30’ - Khoảng cách: 1088km</div>
                </div>
                <a href="search?from=Quảng Trị&to=Bình Dương" class="book-btn">Đặt chỗ</a>
            </div>

            <div class="route-card">
                <img src="bus3.jpg" alt="Quảng Trị - Đà Lạt">
                <div class="route-info">
                    <div class="route-title">Quảng Trị ⇄ Đà Lạt</div>
                    <div class="route-divider"></div>
                    <div class="route-details">
                        <strong>4</strong> chuyến/ngày
                        <div class="route-time">Quảng Trị: 14h (2 chuyến)</div>
                        <div class="route-time">Đà Lạt: 14h30 (2 chuyến)</div>
                    </div>
                    <div class="route-meta">Thời gian: 15h30’ - Khoảng cách: 818km</div>
                </div>
                <a href="search?from=Quảng Trị&to=Đà Lạt" class="book-btn">Đặt chỗ</a>
            </div>

            <div class="route-card">
                <img src="bus4.jpg" alt="Đà Lạt - Hồ Chí Minh">
                <div class="route-info">
                    <div class="route-title">Đà Lạt ⇄ Hồ Chí Minh</div>
                    <div class="route-divider"></div>
                    <div class="route-details">
                        <strong>4</strong> chuyến/ngày
                        <div class="route-time">Đà Lạt: 14h30 - 22h30</div>
                        <div class="route-time">Sài Gòn: 22h30 - 23h30</div>
                    </div>
                    <div class="route-meta">Thời gian: 7h30’ - Khoảng cách: 300km</div>
                </div>
                <a href="search?from=Đà Lạt&to=Hồ Chí Minh" class="book-btn">Đặt chỗ</a>
            </div>
        </div>
    </div>
    
    <div class="container">
        <h2>Tiện ích nhà xe</h2>
        <div class="features">
            <div class="feature">
                <img src="bus1.jpg" alt="Tiện ích cao cấp">
                <div class="feature-content">
                    <div class="feature-title">Tiện ích cao cấp</div>
                    <div class="feature-text">Hệ thống xe Limousine sang trọng, đầy đủ tiện ích như màn hình riêng, nước uống, tai nghe, chăn đắp.</div>
                    <ul class="feature-list">
                        <li>Toàn bộ xe được trang bị nội thất cao cấp</li>
                        <li>Luôn phục vụ nước uống và wifi trên xe</li>
                        <li>Khử trùng Nano Bạc đảm bảo an toàn</li>
                    </ul>
                </div>
            </div>

            <div class="feature">
                <img src="bus2.jpg" alt="Đáp ứng mọi khung giờ">
                <div class="feature-content">
                    <div class="feature-title">Đáp ứng mọi khung giờ</div>
                    <div class="feature-text">Với hơn 100 xe hoạt động liên tục, đáp ứng mọi nhu cầu di chuyển của hành khách.</div>
                    <ul class="feature-list">
                        <li>Tần suất hoạt động 10 chuyến/ngày</li>
                        <li>Hoạt động 24/24, kể cả Lễ Tết</li>
                        <li>Tư vấn 24/7 tại hotline 1900 6053</li>
                    </ul>
                </div>
            </div>

            <div class="feature">
                <img src="bus3.jpg" alt="Dịch vụ đẳng cấp">
                <div class="feature-content">
                    <div class="feature-title">Dịch vụ đẳng cấp</div>
                    <div class="feature-text">Nhà xe phục vụ chuyên nghiệp, cam kết không đón khách dọc đường.</div>
                    <ul class="feature-list">
                        <li>Miễn phí đón trả tận nơi</li>
                        <li>Không đón trả khách dọc đường</li>
                        <li>Đặt vé dễ dàng, thanh toán linh hoạt</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	</div>
</body>
</html>


