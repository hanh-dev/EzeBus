@extends('layouts.app')
@section('content')

<body>
    <div class="home-container">
        <div class="banner">
            <img src="{{ asset('images\IMG_9357.JPG') }}" alt="Banner">
        </div>
        <div class="home">
                <div class="search-container">
                    <form action="{{ route('search') }}" method="GET" class="form-container">
                        <div class="form-group">
                            <label for="from">Departure</label>
                            <input type="text" id="from" name="from" placeholder="Enter departure location" required>
                        </div>
                        <div class="form-group">
                            <label for="to">Destination</label>
                            <input type="text" id="to" name="to" placeholder="Enter destination" required>
                        </div>
                        <div class="form-group">
                            <label for="date">Departure Date</label>
                            <input type="date" id="date" name="date" required>
                        </div>
                        <button type="submit" class="btn">Search Trip</button>
                    </form>
                </div>

                <div class="way-container">
                    <div class="title">Easy Ticket Booking</div>
                    <div class="steps">
                        <div class="step">
                            <svg xmlns="http://www.w3.org/2000/svg" width="61" height="72" viewBox="0 0 61 72" fill="none">
                                <!-- SVG path here -->
                            </svg>
                            <div class="step-title">1. Enter Information</div>
                            <div class="step-desc">Please enter the departure location, destination, and departure date to find tickets.</div>
                        </div>
                        <div class="arrow">➜</div>
                        <div class="step">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="72" viewBox="0 0 73 72" fill="none">
                                <!-- SVG path here -->
                            </svg>
                            <div class="step-title">2. Choose Your Trip</div>
                            <div class="step-desc">You can select the trip, seat, and enter information to reserve your spot.</div>
                        </div>
                        <div class="arrow">➜</div>
                        <div class="step">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="72" viewBox="0 0 73 72" fill="none">
                                <!-- SVG path here -->
                            </svg>
                            <div class="step-title">3. Payment</div>
                            <div class="step-desc">Pay via e-wallet, card, or other payment methods.</div>
                        </div>
                        <div class="arrow">➜</div>
                        <div class="step">
                            <svg xmlns="http://www.w3.org/2000/svg" width="73" height="72" viewBox="0 0 73 72" fill="none">
                                <!-- SVG path here -->
                            </svg>
                            <div class="step-title">4. Departure</div>
                            <div class="step-desc">Complete the process to receive your ticket code and get ready for your trip.</div>
                        </div>
                    </div>
                </div>

                <div class="route-container">
                    <h2>Popular Routes</h2>
                    <div class="route-list">
                        <div class="route-card">
                            <img src="{{ asset('images\IMG_9357.JPG') }}" alt="HCM - Quang Tri">
                            <div class="route-info">
                                <div class="route-title">Quang Tri ⇄ Ho Chi Minh</div>
                                <div class="route-divider"></div>
                                <div class="route-details">
                                    <strong>4</strong> trips/day
                                    <div class="route-time">Quang Tri: 06:00 & 14:00</div>
                                    <div class="route-time">Saigon: 05:00 & 11:00</div>
                                </div>
                                <div class="route-meta">Duration: 18h30' - Distance: 1088km</div>
                            </div>
                            <a href="search?from=Quang Tri&to=Ho Chi Minh" class="btn">Book Now</a>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body>

@endsection
