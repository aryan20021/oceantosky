@extends('layout')

@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Destination</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Destination</li>
            </ul>
        </div>
    </div>
</div>

<div class="destination-wrapper pt-110">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="destination-card-style-two">
                    <div class="d-card-thumb">
                        <img src="assets/images/destination/Everest base camp2.jpeg" alt>
                    </div>
                    <div class="d-card-content">
                        <h4 class="destination-title"><a href="{{route('pacakage')}}">Everest Trip</a></h4>
                        <div class="place-count">
                            <span>10</span> Places
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="destination-card-style-two">
                    <div class="d-card-thumb">
                        <img src="assets/images/destination/Annapurna-base-camp2.jpeg" alt>
                    </div>
                    <div class="d-card-content">
                        <h4 class="destination-title"><a href="{{route('pacakage')}}">Annapurna Trip</a></h4>
                        <div class="place-count">
                            <span>15</span> Places
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="destination-card-style-two">
                    <div class="d-card-thumb">
                        <img src="assets/images/destination/Langtang-trek.jpg" alt>
                    </div>
                    <div class="d-card-content">
                        <h4 class="destination-title"><a href="{{route('pacakage')}}">Langtang Trip</a></h4>
                        <div class="place-count">
                            <span>8</span> Places.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="destination-card-style-two">
                    <div class="d-card-thumb">
                        <img src="assets/images/destination/pokhara.jpeg" alt>
                    </div>
                    <div class="d-card-content">
                        <h4 class="destination-title"><a href="{{route('pacakage')}}">Pokhara Trip</a></h4>
                        <div class="place-count">
                            <span>15</span> Places
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="destination-card-style-two">
                    <div class="d-card-thumb">
                        <img src="assets/images/destination/Lower-Mustang-Trek-1.jpg" alt>
                    </div>
                    <div class="d-card-content">
                        <h4 class="destination-title"><a href="{{route('pacakage')}}">Mustang Trip</a></h4>
                        <div class="place-count">
                            <span>10</span> Places
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="destination-card-style-two">
                    <div class="d-card-thumb">
                        <img src="assets/images/destination/Mardi-Himal-Trekking.jpg" alt>
                    </div>
                    <div class="d-card-content">
                        <h4 class="destination-title"><a href="{{route('pacakage')}}">Mardi Trip</a></h4>
                        <div class="place-count">
                            <span>11</span> Places
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="destination-card-style-two">
                    <div class="d-card-thumb">
                        <img src="assets/images/destination/ChitwanNationalPark.jpg" alt>
                    </div>
                    <div class="d-card-content">
                        <h4 class="destination-title"><a href="{{route('pacakage')}}">Chitwan Trip</a></h4>
                        <div class="place-count">
                            <span>12</span> Places
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="destination-card-style-two">
                    <div class="d-card-thumb">
                        <img src="assets/images/destination/Kathmandu.jpg" alt>
                    </div>
                    <div class="d-card-content">
                        <h4 class="destination-title"><a href="{{route('pacakage')}}">Kathmandu Trip</a></h4>
                        <div class="place-count">
                            <span>50</span> Places
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="destination-card-style-two">
                    <div class="d-card-thumb">
                        <img src="assets/images/destination/Lumbini.jpg" alt>
                    </div>
                    <div class="d-card-content">
                        <h4 class="destination-title"><a href="{{route('pacakage')}}">Lumbini Trip</a></h4>
                        <div class="place-count">
                            <span>25</span> Places
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav>
                    <ul class="pagination pagination-style-one justify-content-center pt-50">
                        <li class="page-item page-arrow"><a class="page-link" href="#"><i
                                    class="bi bi-chevron-double-left"></i></a></li>
                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                        <li class="page-item"><a class="page-link" href="#">04</a></li>
                        <li class="page-item page-arrow"><a class="page-link" href="#"><i
                                    class="bi bi-chevron-double-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection
