@extends('layout')

@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Tour Package</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Tour Package</li>
            </ul>
        </div>
    </div>
</div>

<div class="package-wrapper pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="package-card-alpha">
                    <div class="package-thumb">
                        <a href="{{route('ebc')}}"><img src="assets/images/package/Everest base camp.jpeg" alt></a>
                        <p class="card-lavel">
                            <i class="bi bi-clock"></i> <span>15 Days & 14 nights</span>
                        </p>
                    </div>
                    <div class="package-card-body">
                        <h3 class="p-card-title"><a href="{{route('ebc')}}">Everest Base Camp.</a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="{{route('ebc')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            <div class="p-card-info">
                                <span>From</span>
                                <h6>$1285 <span>Per Person</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="package-card-alpha">
                    <div class="package-thumb">
                        <a href="{{route('langtang')}}"><img src="assets/images/package/Langtang-trek.jpg" alt></a>
                        <p class="card-lavel">
                            <i class="bi bi-clock"></i> <span>10 Days & 9 nights</span>
                        </p>
                    </div>
                    <div class="package-card-body">
                        <h3 class="p-card-title"><a href="{{route('langtang')}}">Langtang Valley</a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="{{route('langtang')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            <div class="p-card-info">
                                <span>From</span>
                                <h6>$800 <span>Per Person</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="package-card-alpha">
                    <div class="package-thumb">
                        <a href="{{route('abc')}}"><img src="assets/images/package/annapurna-base-camp.jpeg" alt></a>
                        <p class="card-lavel">
                            <i class="bi bi-clock"></i> <span>12 Days & 11 nights</span>
                        </p>
                    </div>
                    <div class="package-card-body">
                        <h3 class="p-card-title"><a href="{{route('abc')}}">Annapurna Base Camp.</a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="{{route('abc')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            <div class="p-card-info">
                                <span>From</span>
                                <h6>$870 <span>Per Person</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="package-card-alpha">
                    <div class="package-thumb">
                        <a href="{{route('poonhill')}}"><img src="assets/images/package/poon-hill-panorama-trek-1.jpg" alt></a>
                        <p class="card-lavel">
                            <i class="bi bi-clock"></i> <span>8 Days & 7 nights</span>
                        </p>
                    </div>
                    <div class="package-card-body">
                        <h3 class="p-card-title"><a href="{{route('poonhill')}}">Ghorepani Poon Hill Trek. </a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="{{route('poonhill')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            <div class="p-card-info">
                                <span>From</span>
                                <h6>$750 <span>Per Person</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="package-card-alpha">
                    <div class="package-thumb">
                        <a href="{{route('gosaikunda')}}"><img src="assets/images/package/Gosaikundajpeg.jpeg" alt></a>
                        <p class="card-lavel">
                            <i class="bi bi-clock"></i> <span>16 Days & 15 nights</span>
                        </p>
                    </div>
                    <div class="package-card-body">
                        <h3 class="p-card-title"><a href="{{route('gosaikunda')}}">Langtang Gosaikunda Trek.</a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="{{route('gosaikunda')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            <div class="p-card-info">
                                <span>From</span>
                                <h6>$1020 <span>Per Person</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="package-card-alpha">
                    <div class="package-thumb">
                        <a href="{{route('abc-circuit')}}"><img src="assets/images/package/annpurna-circuit-trek.jpg" alt></a>
                        <p class="card-lavel">
                            <i class="bi bi-clock"></i> <span>17 Days & 16 nights</span>
                        </p>
                    </div>
                    <div class="package-card-body">
                        <h3 class="p-card-title"><a href="{{route('abc-circuit')}}">Annapurna Circuit.</a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="{{route('abc-circuit')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            <div class="p-card-info">
                                <span>From</span>
                                <h6>$1155 <span>Per Person</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="package-card-alpha">
                    <div class="package-thumb">
                        <a href="{{route('gokyochola')}}"><img src="assets/images/package/Everest-Gokyo-Lake-1.jpg" alt></a>
                        <p class="card-lavel">
                            <i class="bi bi-clock"></i> <span>17 Days & 16 nights</span>
                        </p>
                    </div>
                    <div class="package-card-body">
                        <h3 class="p-card-title"><a href="{{route('gokyochola')}}">Everest Base Camp Via Gokyo Chola Pass.</a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="{{route('gokyochola')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            <div class="p-card-info">
                                <span>From</span>
                                <h6>$1380 <span>Per Person</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 ">
                <div class="package-card-alpha">
                    <div class="package-thumb">
                        <a href="{{route('kclp')}}"><img src="assets/images/package/p-alpha8.png" alt></a>
                        <p class="card-lavel">
                            <i class="bi bi-clock"></i> <span>10 Days & 9 nights</span>
                        </p>
                    </div>
                    <div class="package-card-body">
                        <h3 class="p-card-title"><a href="{{route('kclp')}}">Kathmandu-Chitwan-Lumbini-Pokhara</a></h3>
                        <div class="p-card-bottom">
                            <div class="book-btn">
                                <a href="{{route('kclp')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                            </div>
                            <div class="p-card-info">
                                <span>From</span>
                                <h6>$1250 <span>Per Person</span></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav>
                    <ul class="pagination pagination-style-one justify-content-center pt-80">
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
