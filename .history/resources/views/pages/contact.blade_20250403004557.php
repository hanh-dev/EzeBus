@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center font-weight-bold">Liên hệ</h2>

    <div class="row mt-4">
        <!-- Form Liên hệ -->
        <div class="col-md-6">
            <h4><strong>Công ty TNHH MTV THÀNH LIÊN QUẢNG TỊR</strong></h4>
            <p><strong>Địa chỉ:</strong> 99 Tô Hiến Thành, Đà Nẵng </p>
            <p><strong>Hotline:</strong> <span class="text-warning">1900 6053</span></p>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <form action="{{ url('/lien-he') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <label>Họ và tên *</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6">
                        <label>Số điện thoại *</label>
                        <input type="text" name="phone" class="form-control" required>
                    </div>
                </div>

                <label>Email</label>
                <input type="email" name="email" class="form-control">

                <label>Tiêu đề</label>
                <input type="text" name="subject" class="form-control">

                <label>Nội dung liên hệ</label>
                <textarea name="message" class="form-control" rows="4" required></textarea>

                <button type="submit" class="btn btn-warning mt-3">GỬI THƯ</button>
            </form>
        </div>

        <!-- Google Maps -->
        <div class="col-md-6">
            <h4>Bản đồ</h4>
            <div id="map" style="width: 100%; height: 400px;"></div>
        </div>
    </div>
</div>

<script>
    function initMap() {
        var location = { lat: 16.0544, lng: 108.2022 }; // Đà Nẵng
        var map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: location
        });
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=INSERT_YOUR_API_KEY&callback=initMap"></script>
@endsection
