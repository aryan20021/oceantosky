<!doctype html>
<html lang="en">

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Aug 2024 07:29:23 GMT -->

<head>
    <title>OceanToSky - Trekking Company</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon.png">

    <link rel="stylesheet" href="assets/css/select2.min.css">

    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">

    <link href="assets/css/boxicons.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/css/animate.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css">

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
</head>

<body>
    <div class="mobile-search">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-11">
                    <label>What are you lookking for?</label>
                    <input type="text" placeholder="Search Products, Category, Brand">
                </div>
                <div class="col-1 d-flex justify-content-end align-items-center">
                    <div class="search-cross-btn">

                        <i class="bi bi-x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="category-sidebar-wrapper">
        <div class="category-sidebar">
            <div class="category-header d-flex justify-content-between align-items-center">
                <h4>Category</h4>
                <div class="category-toggle">
                    <i class="bi bi-x-lg"></i>
                </div>
            </div>
            <div class="row row-cols-lg-3 row-cols-2 gy-5 mt-3">
                <div class="col">
                    <a class="category-box" href="{{route('pacakage')}}">
                        <div class="cate-icon mx-auto">
                            <img src="assets/images/icons/cate1.svg" alt>
                        </div>
                        <h5>Adventure</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="{{route('pacakage')}}">
                        <div class="cate-icon mx-auto">
                            <img src="assets/images/icons/cate2.svg" alt>
                        </div>
                        <h5>Group Tour</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="{{route('pacakage')}}">
                        <div class="cate-icon mx-auto">
                            <img src="assets/images/icons/cate3.svg" alt>
                        </div>
                        <h5>Couple Tour</h5>
                    </a>
                </div>
                <div class="col">
                    <a class="category-box" href="{{route('pacakage')}}">
                        <div class="cate-icon mx-auto">
                            <img src="assets/images/icons/cate4.svg" alt>
                        </div>
                        <h5>Single Tour</h5>
                    </a>
                </div>

                <div class="col">
                    <a class="category-box" href="{{route('pacakage')}}">
                        <div class="cate-icon mx-auto">
                            <img src="assets/images/icons/cate7.svg" alt>
                        </div>
                        <h5>Mountain Tour</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- main header --}}
    <header>
        <div class="header-area header-style-three position-absolute w-100">
            <div class="container-fluid">
                <div class="row">
                    <div
                        class="col-xxl-2 col-xl-2 col-lg-12 col-md-12 col-sm-12 col-xs-12 align-items-center d-xl-flex d-lg-block">
                        <div class="nav-logo d-flex justify-content-between align-items-center">
                            <a href="/"><img class="header-logo" src="assets/images/logo-w.png"
                                    alt="logo"></a>
                            <div class="mobile-menu d-flex ">
                                <div class="d-flex align-items-center">
                                    <div class="nav-right-icons d-xl-none d-flex align-items-center ">
                                        <div class="user-dropdown">
                                            <i class="bx bx-user-circle"></i>
                                            <ul class="user-drop-list">
                                                <li><a href="#">My Account</a></li>
                                                <li><a href="#">Login</a></li>
                                                <li><a href="#">Registration</a></li>
                                                <li><a href="#">Setting</a></li>
                                            </ul>
                                        </div>
                                        <div class="category-toggle"><i class="bx bx-category"></i></div>
                                    </div>
                                    <a href="javascript:void(0)" class="hamburger d-block d-xl-none">
                                        <span class="h-top"></span>
                                        <span class="h-middle"></span>
                                        <span class="h-bottom"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-7 col-xl-8 col-lg-9 col-md-8 col-sm-6 col-xs-6">
                        <nav class="main-nav">
                            <div class="inner-logo d-xl-none text-center">
                                <a href="/"><img src="assets/images/logo.png" alt></a>
                            </div>
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}">About Us</a>
                                </li>
                                <li >
                                    <a href="{{route('destination')}}">Destination</a>

                                </li>
                                <li >
                                    <a href="{{route('pacakage')}}">Package</a>

                                </li>
                                <li >
                                    <a href="{{route('blogs')}}">Blogs</a>


                                </li>
                                <li class="has-child-menu">
                                    <a href="javascript:void(0)">Pages</a>
                                    <i class="fl flaticon-plus">+</i>
                                    <ul class="sub-menu">
                                        <li><a href="{{route('guide')}}">Guide</a></li>
                                        <li><a href="{{route('gallery')}}">Gallery</a></li>
                                        <li><a href="{{route('faq')}}">FAQ</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{route('contactus')}}">Contact Us</a></li>
                            </ul>
                            <div class="inner-contact-options d-xl-none">
                                <div class="contact-box-inner"><i class="bi bi-telephone-fill"></i> <a
                                        href="tel:+17632275032">+977-01-4528085</a></div>
                                <div class="contact-box-inner"><i class="bi bi-envelope-fill"></i><a
                                        href="mailto:info@oceantoskyadventures.com">info@oceantoskyadventures.com</a>

                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-xxl-3 col-xl-2 col-lg-1">
                        <div class="nav-right d-xl-flex d-none">
                            <div class="nav-right-hotline d-xxl-flex d-none">
                                <div class="hotline-icon">
                                    <img src="assets/images/icons/header-phone.svg" alt>
                                </div>
                                <div class="hotline-info">
                                    <span>Hot Line Number</span>
                                    <h6><a href="tel:8801761111456">+977-01-4528085</a></h6>
                                </div>
                            </div>
                            <div class="nav-right-icons gap-3">
                                <div class="header-search search-btn">
                                    <i class="bx bx-search-alt"></i>
                                </div>
                                <div class="category-toggle"><i class="bx bx-category"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

<main>
    @yield('content')
</main>
<br>
<br>

<div class="footer-area">
    <div class="footer-main-wrapper">
        <div class="footer-vactor">
            <img src="assets/images/banner/footer-bg.png" alt>
        </div>
        <div class="container">
            <div class="row justify-content-center g-4">
                <div class="col-lg-4">
                    <div class="footer-about text-lg-start text-center">
                        <p>DAt Ocean to Sky Adventures, we’re dedicated to delivering extraordinary trekking
                            experiences in the world’s most breathtaking destinations. With over 10 years of
                            expertise, we offer exceptional service, unmatched safety, and authentic cultural
                            encounters. Discover more about our mission and values. </p>
                        <div class="footer-social-wrap">
                            <h5>Follow Us On:</h5>
                            <ul class="footer-social-links justify-content-lg-start justify-content-center">
                                <li><a href="https://www.instagram.com/otsadventures/"><i
                                            class="bx bxl-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/oceantoskyadventuresnepal"><i
                                            class="bx bxl-facebook"></i></a></li>
                                <li><a href="https://x.com/oceantoskyadventuresnepal"><i
                                            class="bx bxl-twitter"></i></a></li>
                                <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                                <li><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Quick Link</h4>
                        <ul class="footer-links">
                            <li><a href="{{route('about')}}">About Us</a></li>
                            <li><a href="{{route('pacakage')}}">Tour Package</a></li>
                            <li><a href="{{route('destination')}}">Destination</a></li>
                            <li><a href="{{route('guide')}}">Tour Guide</a></li>
                            <li><a href="{{route('pacakage')}}">Booking Process</a></li>
                            <li><a href="{{route('blogs')}}">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title">Tour Type</h4>
                        <ul class="footer-links">
                            <li><a href="#">Wild & Adventure Tours</a></li>
                            <li><a href="#">Group Tour</a></li>
                            <li><a href="#">Seasonal Tours</a></li>
                            <li><a href="#">Relaxation Tours</a></li>
                            <li><a href="#">Family Friendly Tours</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="footer-widget">
                        <h4 class="footer-widget-title text-center">Gallery</h4>
                        <div class="footer-gallary-grid">
                            <div class="footer-gallary-item">
                                <a href="assets/images/gallary/fg-1.png" data-fancybox="footer"
                                    data-caption="Caption Here"><img src="assets/images/gallary/fg-1.png" alt></a>
                            </div>
                            <div class="footer-gallary-item">
                                <a href="assets/images/gallary/fg-2.png" data-fancybox="footer"
                                    data-caption="Caption Here"><img src="assets/images/gallary/fg-2.png" alt></a>
                            </div>
                            <div class="footer-gallary-item">
                                <a href="assets/images/gallary/fg-3.png" data-fancybox="footer"
                                    data-caption="Caption Here"><img src="assets/images/gallary/fg-3.png" alt></a>
                            </div>
                            <div class="footer-gallary-item">
                                <a href="assets/images/gallary/fg-4.png" data-fancybox="footer"
                                    data-caption="Caption Here"><img src="assets/images/gallary/fg-4.png" alt></a>
                            </div>
                            <div class="footer-gallary-item">
                                <a href="assets/images/gallary/fg-5.png" data-fancybox="footer"
                                    data-caption="Caption Here"><img src="assets/images/gallary/fg-5.png" alt></a>
                            </div>
                            <div class="footer-gallary-item">
                                <a href="assets/images/gallary/fg-6.png" data-fancybox="footer"
                                    data-caption="Caption Here"><img src="assets/images/gallary/fg-6.png" alt></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-contact-wrapper">
                <h5>Contact Us:</h5>
                <ul class="footer-contact-list">
                    <li><i class="bi bi-telephone-x"></i> <a href="tel:+977-9849687932">+977-9849687932</a></li>
                    <li><i class="bi bi-envelope-open"></i><a
                            href="mailto:info@oceantoskyadventures.com">info@oceantoskyadventures.com</a>
                    </li>
                    <li><i class="bi bi-geo-alt"></i> <a href="#">Utardhoka Gairidhara, Kathmandu, Nepal</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-4 col-md-6 order-lg-1 order-3 ">
                    <div class="copyright-link text-lg-start text-center">
                        <p>Copyright 2024 OceanToSky | Design By <a href="https://pdg.com.np/"> Prashant Digital Growth</a></p>
                    </div>
                </div>
                <div class="col-lg-4  order-lg-2 order-1">
                    <div class="footer-logo text-center">
                        <a href="/"><img src="assets/images/logo-w.png" alt></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 order-lg-3 order-2">
                    <div class="policy-links">
                        <ul class="policy-list justify-content-lg-end justify-content-center">
                            <li><a href="#">Terms & Condition</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/chain_fade.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>
<script src="assets/js/select2.min.js"></script>
<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from demo.egenslab.com/html/tourxpro/demo/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Aug 2024 07:29:34 GMT -->

</html>

</body>
