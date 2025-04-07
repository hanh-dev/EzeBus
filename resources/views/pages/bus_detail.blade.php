
@extends ('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/bus_detail.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
@endsection
@section('content')
<div class="container-fluid">
        <div class="info_bus">
            <div class="container">
                <div class="top_info">
                    <i class="fa-solid fa-arrow-left"></i>
                    <h3 class="title_bus">Acela</h3>
                    <div class="div"></div>
                </div>
                <div class="bottom_info_bus">
                    <div class="left_info">
                        <p class="start">5:50AM</p>
                        <p class="address_start">Chennai CMBT</p>
                        <p class="time">November 27</p>
                    </div>
                    <div class="between_info">
                        <p style="text-align:center">3:05hrs</p>
                        <div class="line">
                            <!-- 5 đoạn nét đứt bên trái -->
                            <div class="dashed-line"></div>
                            <div class="dashed-line"></div>
                            <div class="dashed-line"></div>
                            <div class="dashed-line"></div>
                            <div class="dashed-line"></div>
                    
                            <!-- Icon xe buýt -->
                            <span class="bus-icon">🚌</span>
                    
                            <!-- 5 đoạn nét đứt bên phải -->
                            <div class="dashed-line"></div>
                            <div class="dashed-line"></div>
                            <div class="dashed-line"></div>
                            <div class="dashed-line"></div>
                            <div class="dashed-line"></div>
                        </div>
                    </div>
                    
                    <div class="right_info">
                        <p class="end">5:50AM</p>
                        <p class="address_end">Chennai CMBT</p>
                        <p class="evaluate">4.4 ⭐
                        </p>
                    </div>
                </div>
            </div>
        </div>


    <div class="container">
        <div class="status">
            <div class="status_item">
                <div class="status_box booked">
                </div>
                <div class="title_booked">Booked</div>
            </div>
            <div class="status_item">
                <div class="status_box available">
                </div>
                <div class="title_available">Available</div>
            </div>
        </div>
    </div>

   <div class="container">
    <div class="bus-seating">
        
        <div class="seat-row">
            <div class="seat available">1</div>
            <div class="seat available">1</div>
            <div class="seat available">1</div>
            <div class="seat available">1</div>
        </div>
        <div class="seat-row">
            <div class="seat booked"></div>
            <div class="seat available">1</div>
            <div class="seat booked"></div>
            <div class="seat empty"></div>
        </div>
        <div class="seat-row">
            <div class="seat available">1</div>
            <div class="seat available">1</div>
            <div class="seat available">1</div>
            <div class="seat available">1</div>
        </div>
    </div>
   </div>
</div>

<div class="container-fluid mt-3 mb-0 shadow  info_buss mt-4" style="background-color: white;">
    <div class="container mt-4 d-flex justify-content-between">
        <div class="left_total row fs-3">
            <p class="p_total col-12 text-secondary">Total</p>
            <p class="price col-12 fw-bold">$86</p>
        </div>
        <div class="right_pay d-flex align-items-center justify-content-center">
            <div class="p_pay text-white text-center p-2 rounded" style="background-color: #1ABC9C; font-size:20px;">
                Continue to pay
            </div>
        </div>
    </div>
</div>
@endsection