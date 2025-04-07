@extends('layouts.app')

@section('content')
<div class="container my-5">
    <h2 class="text-center font-weight-bold">Liên hệ</h2>

    <div class="row mt-4">
        <!-- Thông tin công ty -->
        <div class="col-md-6">
            <h4><strong>Công ty TNHH MTV THÀNH LIÊN QUẢNG TRỊ</strong></h4>
            <p><strong>Địa chỉ:</strong> Số 37, Ông Ích Khiêm, KP1, P1, TP Đông Hà, Quảng Trị</p>
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
            <iframe 
                width="100%" 
                height="400" 
                frameborder="0" 
                style="border:0;" 
                src="https://www.google.com/maps/embed/v1/place?key=YOUR_GOOGLE_MAPS_API_KEY&q=37+Ông+Ích+Khiêm,Đông+Hà,Quảng+Trị" 
                allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
@endsection
