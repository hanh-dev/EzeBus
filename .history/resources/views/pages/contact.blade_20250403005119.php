@extends('layouts.app')

@section('content')
<div class="container my-5 d-flex justify-content-center">
    <div class="contact-container">
        <h2 class="text-center font-weight-bold mb-4">Liên hệ</h2>
        <div class="d-flex align-items-start">
            <!-- Form liên hệ -->
            <div class="contact-form">
                <h4><strong>Công ty TNHH MTV THÀNH LIÊN QUẢNG TRỊ</strong></h4>
                <p><strong>Địa chỉ:</strong> 99 Tô Hiến Thành, Đà Nẵng</p>
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
            <div id="map"></div>
        </div>
    </div>
</div>

<style>
    .contact-container {
        width: 1185px;
        display: flex;
        flex-direction: column;
    }
    .d-flex {
        display: flex;
        gap: 50px;
    }
    .contact-form {
        flex: 1;
    }
    #map {
        flex: 1;
        height: 500px;
        border-radius: 10px;
    }
</style>

<script>
    function initMap() {
        const mapOptions = {
            center: { lat: 16.047079, lng: 108.206230 }, // Đà Nẵng
            zoom: 16,
        };
        const map = new google.maps.Map(document.getElementById("map"), mapOptions);
        new google.maps.Marker({
            position: mapOptions.center,
            map: map,
            title: "Công ty TNHH MTV THÀNH LIÊN QUẢNG TRỊ",
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script>
@endsection
