<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Import file CSS -->
    <link rel="stylesheet" href="css/userProfile.css">

    <!-- Import Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="css/tickets.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">

</head>

<body>
    <div class="container">
        <div class="profile-header">
            <h2 class="profile-title">Profile</h2>
            <div class="profile-header1">
                <div class="profile-avatar">
                    <img src="https://i.pravatar.cc/100" alt="Profile Picture" class="profile-pic">
                </div>
                <div class="profile-info">
                    <h2>Kayal Vizhi</h2>
                    <p>+41 6232 283 8324</p>
                </div>
                <!-- <i class="fas fa-edit edit-icon"></i> -->
            </div>
        </div>
        <div class="div2">
            <div class="menu">
                <!-- <div class="menu-item" ><a></a><i class="fas fa-ticket-alt" id="bookings"></i> Bookings</div> -->
                <div class="menu-item" id="booking"><i class="fas fa-ticket-alt"></i>Bookings</div>
                <div class="menu-item"><i class="fas fa-users"></i> Passengers list</div>
                <div class="menu-item"><i class="fas fa-wallet"></i> Wallet</div>
                <div class="menu-item"><i class="fas fa-gift"></i> Refer & Earn</div>
                <div class="menu-item"><i class="fas fa-tag"></i> Offers</div>
                <div class="menu-item"><i class="fas fa-info-circle"></i> FAQ’s & Support</div>
                <div class="menu-item"><i class="fas fa-question-circle"></i> About Us</div>
            </div>
            <div class="user-info">
                <div class="user-info1">
                    <div class="user-item">
                        <div class="user-item1">Name:</div>
                        <div class="user-item2">asdasdsad</div>
                    </div>
                    <div class="user-item">
                        <div class="user-item1">Phone:</div>
                        <div class="user-item2">asdasdsad</div>
                    </div>
                    <div class="user-item">
                        <div class="user-item1">Address:</div>
                        <div class="user-item2">asdasdsad</div>
                    </div>
                    <button class="but1">Update</button>
                </div>
                <div class="tickets" style="display: none; width: 100%  ">
                    <div class="header">
                        <a href="{{ url('/profile') }}"><i class="fas fa-arrow-left back-icon"></i></a>
                        <h4>Bookings</h4>
                    </div>

                    <!-- Tabs -->
                    <div class="tabs">
                        <button class="tab active">Active</button>
                        <button class="tab">Completed</button>
                        <button class="tab">Cancelled</button>
                    </div>

                    <!-- Ticket List -->
                    <div class="ticket-container">
                        <div class="ticket">
                            <div class="ticket-header">
                                <div class="location">
                                    <p>Chennai CMBT</p>
                                    <h3>CHN</h3>
                                </div>
                                <div class="time">
                                    <p><i class="fas fa-clock"></i> 3.05hrs</p>
                                </div>
                                <div class="location right">
                                    <p>Bangalore BS</p>
                                    <h3>BLR</h3>
                                </div>
                            </div>
                            <div class="ticket-details">
                                <span class="icon-tickets1"><i class="far fa-calendar-alt"></i> Today</span>
                                <span class="icon-tickets2"><i class="fas fa-user-friends"></i> 2 Persons</span>
                                <span class="icon-tickets3"><i class="fas fa-coins"></i> £89/-</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{ asset('js/booking.js') }}"></script>
</html>