@extends('layout')

@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Blog</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ul>
        </div>
    </div>
</div>

<div class="blog-wrapper pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-gamma">
                    <div class="blog-thumb">
                        <a href="{{route('blog1')}}">
                            <img src="assets/images/blog/Everest base camp2.jpeg" alt>
                        </a>
                        <div class="blog-lavel">
                            <a href="#">Tourist</a>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-body-top">
                            <a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By John David </a>
                            <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> Novembar 16, 2021</a>
                        </div>
                        <h4 class="blog-title"><a href="{{route('blog1')}}"> Hiking in the Himalayas: A Beginner’s
                            Guide.</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-gamma">
                    <div class="blog-thumb">
                        <a href="{{route('blog2')}}">
                            <img src="assets/images/blog/pokhara.jpeg" alt>
                        </a>
                        <div class="blog-lavel">
                            <a href="#">Travel</a>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-body-top">
                            <a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By Sandesh Karki </a>
                            <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> July 12, 2023</a>
                        </div>
                        <h4 class="blog-title"><a href="{{route('blog2')}}">Experience the Thrill of Adventure Sports
                            in Pokhara.</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-gamma">
                    <div class="blog-thumb">
                        <a href="{{route('blog3')}}">
                            <img src="assets/images/blog/Chitwan.jpg" alt>
                        </a>
                        <div class="blog-lavel">
                            <a href="#">Tourist</a>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-body-top">
                            <a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By Bibek Chhetri </a>
                            <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> Novembar 16, 2023</a>
                        </div>
                        <h4 class="blog-title"><a href="{{route('blog3')}}">Exploring the Wildlife of Chitwan National Park.</a></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-gamma">
                    <div class="blog-thumb">
                        <a href="{{route('blog4')}}">
                            <img src="assets/images/blog/idol_1721331i.jpg" alt>
                        </a>
                        <div class="blog-lavel">
                            <a href="#">Travel</a>
                        </div>
                    </div>
                    <div class="blog-content">
                        <div class="blog-body-top">
                            <a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By Kajal Shrestha </a>
                            <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> june 16, 2023</a>
                        </div>
                        <h4 class="blog-title"><a href="{{route('blog4')}}"> Discovering Nepal’s Rich Culture and
                            Heritage.</a></h4>
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
