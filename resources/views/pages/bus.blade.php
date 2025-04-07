@extends ('layouts.app')
@section('head')
<link rel="stylesheet" href="{{ asset('css/bus.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
@endsection
@section('content')
  
    <div class="container-fluid">
        <div class="bus_trip">
            <div class="container">
                <div class="top_bus_trip">
                    <i class="fa-solid fa-arrow-left"></i>
                    <i class="fa-solid fa-rotate-right"></i>
                </div>
                <div class="locations">
                    <p class="location_start">
                        Chennai, TN
                    </p>
                    <p></p>
                    <p class="location_end">Banglore, KA</p>
                </div>
                <div class="route">
                    <p class="route_left">
                        CHIN
                    </p>
                    <p class="route_between">
                    <div class="line">
                        <div class="dashed-line"></div>
                        <div class="dashed-line"></div>
                        <div class="dashed-line"></div>
                        <div class="dashed-line"></div>
                        <div class="dashed-line"></div>
                        <span><i class="fa-solid fa-bus"></i></span>
                        <div class="dashed-line"></div>
                        <div class="dashed-line"></div>
                        <div class="dashed-line"></div>
                        <div class="dashed-line"></div>
                        <div class="dashed-line"></div>
                    </div>
                    </p>
                    <p class="route_end">BAG</p>
                </div>
                <div class="date-selector">
                    <span>Nov 25</span>
                    <span>Nov 26</span>
                    <span>Nov 27</span>
                    <span>Nov 28</span>
                    <span>Nov 30</span>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="bus_card">

                <div class="bus_card_top">
                    <div class="bus_card_info">
                        <i class="fas fa-paper-plane" style="color: #0A3D52;"></i>
                        <div class="bus_info_card">
                            <h3>Virgin Travels</h3>
                            <p class="info_card">Valva Multi Axle Semi Sleeper</p>
                        </div>
                    </div>
                    <span class="cheapest-tag">CHEAPEST</span>
                </div>

                <div class="bus_card_between">
                    <div class="left_card_between">
                        <p class="left_start">
                            6:50PM
                        </p>
                        <p class="light_left">
                            Chennai CMBT
                        </p>
                    </div>
                    <div class="between_card_between">
                        <p class="between_time">4:05hrs</p>
                        <div class="dasheds-line"></div>
                        <div class="dasheds-line"></div>
                        <div class="dasheds-line"></div>
                        <div class="dasheds-line"></div>
                        <div class="dasheds-line"></div>
                        <i class="fa-solid fa-bus"></i>
                        <div class="dasheds-line"></div>
                        <div class="dasheds-line"></div>
                        <div class="dasheds-line"></div>
                        <div class="dasheds-line"></div>
                        <div class="dasheds-line"></div>
                    </div>
                    <div class="bottom_card_between">
                        <p class="bottom_start">
                            12:15PM
                        </p>
                        <p class="light_right">
                            Bengalore
                        </p>
                    </div>
                </div>

                <hr>

                <div class="bus_card_bottom">
                    <p class="evaluate_card">⭐ 4.4 </p>
                   <p> <i class="fa-solid fa-user">  <span>34</span></i></p>
                  
                    <p class="price_card">
                        $48
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection