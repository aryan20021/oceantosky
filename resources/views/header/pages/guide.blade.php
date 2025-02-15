@extends('layout')

@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Tour Guide</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Tour Guide</li>
            </ul>
        </div>
    </div>
</div>

<div class="guide-wrapper  pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="guide-card-gamma">
                    <div class="guide-image">
                        <img src="assets/images/guide/guide-md7.png" alt>
                        <ul class="guide-social-links">
                            <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                        </ul>
                        <div class="contact-lavel">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="guide-content">
                        <h4 class="guide-name">Prajwol Shrestha</h4>
                        <h6 class="guide-designation">Travel Associate</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="guide-card-gamma">
                    <div class="guide-image">
                        <img src="assets/images/guide/guide-md8.png" alt>
                        <ul class="guide-social-links">
                            <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                        </ul>
                        <div class="contact-lavel">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="guide-content">
                        <h4 class="guide-name">Raju Pandey</h4>
                        <h6 class="guide-designation">Tour Guide</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="guide-card-gamma">
                    <div class="guide-image">
                        <img src="assets/images/guide/guide-md9.png" alt>
                        <ul class="guide-social-links">
                            <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                            <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                            <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                        </ul>
                        <div class="contact-lavel">
                            <a href="#">Contact</a>
                        </div>
                    </div>
                    <div class="guide-content">
                        <h4 class="guide-name">Pushpa Bhandari</h4>
                        <h6 class="guide-designation">Accounts Head</h6>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-12">
                <nav>
                    <ul class="pagination pagination-style-one justify-content-center pt-80">
                        <li class="page-item page-arrow mx-4"><a class="page-link" href="#"><i
                                    class="bi bi-chevron-double-left"></i></a></li>
                        <li class="page-item page-arrow mx-4"><a class="page-link" href="#"><i
                                    class="bi bi-chevron-double-right"></i></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>


@endsection
