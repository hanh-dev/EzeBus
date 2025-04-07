@extends ('layouts.app')
@section('head')
    <link rel="stylesheet" href="{{ asset('css/passenger_details.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
@endsection
@section('content')
    <div class="container-fluid bg-light">
        <div class="container">
            <div class="row d-flex">
                <!-- Content 1: Left Column -->
                <div class="content1 col-12 col-md-6">
                    <div class="container">
                        <div class="info_detai d-flex align-items-center gap-3 py-3">
                            <i class="fa-solid fa-arrow-left fs-3"></i>
                            <span class="title_bus fs-4 fw-bold">Passenger Details</span>
                        </div>
                    </div>

                    <div class="container mt-3">
                        <h3 class="title fw-bold" style="font-size: 20px;">Boarding and Deboarding points:</h3>
                    </div>

                    <div class="container mt-3">
                        <div class="time_passenger d-flex justify-content-between bg-white p-4 rounded">
                            <div class="left-passenger">
                                <!-- Điểm xuất phát -->
                                <div class="start_passenger d-flex align-items-center gap-3">
                                    <div class="d-flex align-items-center flex-shrink-0" style="min-width: 50px;">
                                        <i class="fa-solid fa-bus"></i>
                                        <span class="ms-2"><i class="fa-solid fa-person-walking"></i></span>
                                    </div>
                                    <div class="p_start flex-grow-1">Chennai CMBT @ 5:50am</div>
                                </div>

                                <!-- Điểm đến -->
                                <div class="end_passenger d-flex align-items-center gap-3 mt-2">
                                    <div class="d-flex align-items-center flex-shrink-0" style="min-width: 50px;">
                                        <i class="fa-solid fa-bus"></i>
                                        <span class="ms-2"><i class="fa-solid fa-person-walking-arrow-loop-left"></i></span>
                                    </div>
                                    <div class="end flex-grow-1">Bengalore BS @ 11:15am</div>
                                </div>
                            </div>
                            <div class="right_passenger d-flex align-items-center justify-content-end">
                                <p class="right_p bg-gray-100 p-2" style="border-width: 10px;">Change</p>
                            </div>
                        </div>
                    </div>

                    <div class="container mt-3 d-flex justify-content-between">
                        <div class="left_detai_passenger fw-bold" style="font-size: 20px;">
                            Passenger details
                        </div>
                        <div class="right_detai_passenger">
                            <i class="fa-solid fa-plus"></i>
                            <span class="add_passenger">
                                Add Passenger
                            </span>
                        </div>
                    </div>

                    <div class="container mt-3">
                        <label for="">Name</label><br>
                        <input type="text" class="form-control name_passenger w-100 bg-white mt-3">
                    </div>

                    <div class="container mt-3 d-flex gap-5">
                        <!-- Left -->
                        <div class="left_info_person row w-50">
                            <div class="col-12">
                                <label class="form-label">Age</label>
                            </div>
                            <div class="col-12 d-flex justify-content-start mt-3">
                                <input type="text" class="form-control" style="max-width: 580px; width: 100%;">
                            </div>
                        </div>

                        <!-- Right -->
                        <div class="right_info_person row w-50">
                            <label class="col-12 ">Gender</label>
                            <form class="d-flex justify-content-between w-100 mt-3">
                                <label class="d-flex align-items-center">
                                    <input type="radio" name="option" value="male" class="me-3"> Male
                                </label>
                                <label class="d-flex align-items-center">
                                    <input type="radio" name="option" value="female" class="me-3"> Female
                                </label>
                            </form>
                        </div>
                    </div>

                    <div class="container mt-3">
                        <h2 class="fw-bold mb-4" style="font-size: 20px;">Contact details:</h2>
                        <div class="row">
                            <div class="col-12">
                                <label for="">E-mail</label>
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control mt-3">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 mt-4">
                                <label for="phone">Phone Number</label>
                            </div>
                            <div class="col-12">
                                <input type="tel" id="phone" name="phone" placeholder="+84 123 456 789"
                                    class="form-control mt-3">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex align-items-center mt-4">
                                <input type="checkbox" id="agree" class="me-2 align-self-center">
                                <label for="agree" class="mb-0 ms-4">Send mail and message about the trip details?</label>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content 2: Right Column -->
                <div class="content2 col-12 col-md-6">
                    <img src="https://tanquangdung.com/wp-content/uploads/2024/05/tan-quang-dung-2.jpg
                         " alt="Image" class="img-fluid full-height">
                </div>
            </div>
        </div>
        <div class="container-fluid mt-3 mb-0 shadow" style="background-color: white;">
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
        
    </div>
@endsection