 @extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Home page</title>

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
    <div class="slider"></div>
    
    <div class="search-container">
        <div class="form-group">
            <label>Nơi đi</label>
            <input type="text" placeholder="Nhập nơi đi">
        </div>
        <div class="form-group">
            <label>Nơi đến</label>
            <input type="text" placeholder="Nhập nơi đến">
        </div>
        <div class="form-group">
            <label>Ngày đi</label>
            <input type="date">
        </div>
        <button class="btn">Tìm vé xe</button>
    </div>
    
    <div class="container">
        <h2>Đặt vé dễ dàng</h2>
        <div class="info-box">
            <div>1. Nhập thông tin</div>
            <div>2. Chọn chuyến xe</div>
            <div>3. Thanh toán</div>
            <div>4. Khởi hành</div>
        </div>
    </div>
    
    <div class="container">
        <h2>Lộ trình phổ biến</h2>
        <div class="route-box">
            <div class="route">HCM → Quảng Trị</div>
            <div class="route">HCM → Bình Dương</div>
            <div class="route">HCM → Đà Lạt</div>
            <div class="route">HCM → Đà Nẵng</div>
        </div>
    </div>
    
    <div class="container">
        <h2>Tiện ích nhà xe</h2>
        <div class="facilities">
            <div class="facility">Tiện ích cao cấp</div>
            <div class="facility">Khung giờ linh hoạt</div>
            <div class="facility">Dịch vụ đẳng cấp</div>
        </div>
    </div>
	</div>
</body>
</html>


