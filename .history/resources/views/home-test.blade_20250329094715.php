
   <!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Footer</title>
     <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
    
</head>
<body>
 <div class="container">
        <div class="banner">
            <img src="{{ asset('images\IMG_9357.JPG') }}" alt="Banner">
        </div>

        <div class="search-container">
            <form action="{{ route('search') }}" method="GET" class="form-container">
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

        <div class="way-container">
            <div class="title">Đặt vé dễ dàng</div>
            <div class="steps">
                <div class="step">
                    <svg xmlns="http://www.w3.org/2000/svg" width="61" height="72" viewBox="0 0 61 72" fill="none"><path d="M18.25 37.5C18.25 37.1022 18.408 36.7206 18.6893 36.4393C18.9706 36.158 19.3522 36 19.75 36C20.1478 36 20.5294 36.158 20.8107 36.4393C21.092 36.7206 21.25 37.1022 21.25 37.5C21.25 37.8978 21.092 38.2794 20.8107 38.5607C20.5294 38.842 20.1478 39 19.75 39C19.3522 39 18.9706 38.842 18.6893 38.5607C18.408 38.2794 18.25 37.8978 18.25 37.5ZM19.75 42C19.3522 42 18.9706 42.158 18.6893 42.4393C18.408 42.7206 18.25 43.1022 18.25 43.5C18.25 43.8978 18.408 44.2794 18.6893 44.5607C18.9706 44.842 19.3522 45 19.75 45C20.1478 45 20.5294 44.842 20.8107 44.5607C21.092 44.2794 21.25 43.8978 21.25 43.5C21.25 43.1022 21.092 42.7206 20.8107 42.4393C20.5294 42.158 20.1478 42 19.75 42ZM18.25 49.5C18.25 49.1022 18.408 48.7206 18.6893 48.4393C18.9706 48.158 19.3522 48 19.75 48C20.1478 48 20.5294 48.158 20.8107 48.4393C21.092 48.7206 21.25 49.1022 21.25 49.5C21.25 49.8978 21.092 50.2794 20.8107 50.5607C20.5294 50.842 20.1478 51 19.75 51C19.3522 51 18.9706 50.842 18.6893 50.5607C18.408 50.2794 18.25 49.8978 18.25 49.5ZM25.75 36C25.3522 36 24.9706 36.158 24.6893 36.4393C24.408 36.7206 24.25 37.1022 24.25 37.5C24.25 37.8978 24.408 38.2794 24.6893 38.5607C24.9706 38.842 25.3522 39 25.75 39H40.75C41.1478 39 41.5294 38.842 41.8107 38.5607C42.092 38.2794 42.25 37.8978 42.25 37.5C42.25 37.1022 42.092 36.7206 41.8107 36.4393C41.5294 36.158 41.1478 36 40.75 36H25.75ZM24.25 43.5C24.25 43.1022 24.408 42.7206 24.6893 42.4393C24.9706 42.158 25.3522 42 25.75 42H40.75C41.1478 42 41.5294 42.158 41.8107 42.4393C42.092 42.7206 42.25 43.1022 42.25 43.5C42.25 43.8978 42.092 44.2794 41.8107 44.5607C41.5294 44.842 41.1478 45 40.75 45H25.75C25.3522 45 24.9706 44.842 24.6893 44.5607C24.408 44.2794 24.25 43.8978 24.25 43.5ZM25.75 48C25.3522 48 24.9706 48.158 24.6893 48.4393C24.408 48.7206 24.25 49.1022 24.25 49.5C24.25 49.8978 24.408 50.2794 24.6893 50.5607C24.9706 50.842 25.3522 51 25.75 51H40.75C41.1478 51 41.5294 50.842 41.8107 50.5607C42.092 50.2794 42.25 49.8978 42.25 49.5C42.25 49.1022 42.092 48.7206 41.8107 48.4393C41.5294 48.158 41.1478 48 40.75 48H25.75ZM18.25 12C16.6587 12 15.1326 12.6321 14.0074 13.7574C12.8821 14.8826 12.25 16.4087 12.25 18V54C12.25 55.5913 12.8821 57.1174 14.0074 58.2426C15.1326 59.3679 16.6587 60 18.25 60H42.25C43.8413 60 45.3674 59.3679 46.4926 58.2426C47.6179 57.1174 48.25 55.5913 48.25 54V28.242C48.249 27.0489 47.7742 25.9051 46.93 25.062L35.188 13.317C34.3444 12.4739 33.2006 12.0003 32.008 12H18.25ZM15.25 18C15.25 17.2044 15.5661 16.4413 16.1287 15.8787C16.6913 15.3161 17.4544 15 18.25 15H30.25V25.5C30.25 26.6935 30.7241 27.8381 31.568 28.682C32.4119 29.5259 33.5565 30 34.75 30H45.25V54C45.25 54.7957 44.9339 55.5587 44.3713 56.1213C43.8087 56.6839 43.0456 57 42.25 57H18.25C17.4544 57 16.6913 56.6839 16.1287 56.1213C15.5661 55.5587 15.25 54.7957 15.25 54V18ZM44.629 27H34.75C34.3522 27 33.9706 26.842 33.6893 26.5607C33.408 26.2794 33.25 25.8978 33.25 25.5V15.621L44.629 27Z" fill="#157CFF"></path></svg>"
                    <div class="step-title">1. Nhập thông tin</div>
                    <div class="step-desc">Bạn vui lòng nhập nơi đi, nơi đến và ngày khởi hành để tìm vé xe.</div>
                </div>
                <div class="arrow">➜</div>
                <div class="step">
                    
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

        <div class="route-container">
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

        <div class="extention-container">
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
{{-- <script src="{{ asset('js/footer.js') }}"></script> --}}
{{-- <script src="{{ asset('js/header.js') }}"></script> --}}
    
