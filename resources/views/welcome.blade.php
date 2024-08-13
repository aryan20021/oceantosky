@extends('layout')




    @section('content')
    <div class="hero-area hero-style-three">
        <img src="assets/images/banner/banner-plane.svg" class="img-fluid banner-plane">
        <div class="hero-main-wrapper position-relative">
            <div class="hero-social">
                <ul class="social-list d-flex justify-content-center align-items-center gap-4">
                    <li><a href="https://www.facebook.com/oceantoskyadventuresnepal">Facebook</a></li>
                    <li><a href="https://www.instagram.com/otsadventures/">Instagram</a></li>
                    <li><a href="https://x.com/oceantoskyadventuresnepal">Twitter</a></li>
                </ul>
            </div>
            <div class="swiper hero-slider-three ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-bg-1">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-lg-8">
                                        <div class="hero3-content">
                                            <span class="title-top">Wellcome To OceanToSky</span>
                                            <h1>Reconnect with Nature</h1>
                                            <p>Escape the hustle and bustle of everyday life and immerse yourself in the
                                                tranquility of the great outdoors. Our treks provide the perfect
                                                opportunity to reconnect with nature and rejuvenate your spirit
                                            </p>
                                            <a href="{{route('pacakage')}}" class="button-fill-primary banner3-btn">Book Your Travel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="slider-bg-3">
                            <div class="container">
                                <div class="row d-flex justify-content-center align-items-center">
                                    <div class="col-lg-8">
                                        <div class="hero3-content">
                                            <span class="title-top">Wellcome To OceanToSky</span>
                                            <h1>Feel the Thrill of Climb</h1>
                                            <p>Conquer new heights with our exhilarating trekking tours. Whether you're
                                                aiming for the summit of Mt.Everest or exploring the rugged terrain of
                                                the Himalayas, we have the perfect trek for you.
                                            </p>
                                            <a href="#" class="button-fill-primary banner3-btn">Book Your Travel</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="slider-arrows text-center d-lg-flex flex-column d-none gap-5">
                <div class="hero-prev3" tabindex="0" role="button" aria-label="Previous slide"> <i
                        class="bi bi-arrow-left"></i></div>
                <div class="hero-next3" tabindex="0" role="button" aria-label="Next slide"><i
                        class="bi bi-arrow-right"></i></div>
            </div> -->
        </div>
    </div>


    <div class="searchbar-section">
        <div class="container">
            <div class="multi-main-searchber">
                <div class="row g-4">
                    <div class="col-lg-10">
                        <div class="row gx-0 gy-4">
                            <div class="col-lg-3 col-md-6">
                                <div class="search-box-single destination-box">
                                    <div class="searchbox-icon">
                                        <i class="bi bi-geo-alt"></i>
                                    </div>
                                    <div class="searchbox-input">
                                        <label for="deatination_drop">Destination</label>
                                        <select data-placeholder="Where Are You Going?" id="deatination_drop">
                                            <option value>Where Are You Going?</option>
                                            <optgroup label="Annapurna">
                                                <option>
                                                    Annapurna Circuit
                                                </option>
                                                <option>
                                                    Annapurna Region
                                                </option>
                                                <option>
                                                    Poon Hill Trek
                                                </option>
                                            </optgroup>
                                            <optgroup label="Mt.Everest">
                                                <option>
                                                    Everest Base Camp
                                                </option>
                                                <option>
                                                    Gokyo Via Chola Pass
                                                </option>
                                                <option>
                                                    Everest Region
                                                </option>
                                            </optgroup>
                                            <optgroup label="Langtang">
                                                <option>
                                                    Langtang Valley
                                                </option>
                                                <option>
                                                    Gosaikunda Trek
                                                </option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="search-box-single type-box">
                                    <div class="searchbox-icon">
                                        <i class="bi bi-text-paragraph"></i>
                                    </div>
                                    <div class="searchbox-input">
                                        <label for="activity-dropdown">Travel Type</label>
                                        <select class="defult-select-drowpown" data-placeholder="All Activity"
                                            id="activity-dropdown">
                                            <option value>All Activity</option>
                                            <option value="1">Family Friendly</option>
                                            <option value="2">Hiking</option>
                                            <option value="3">Kids Activity</option>
                                            <option value="4">Safari</option>
                                            <option value="4">Self Guided</option>
                                            <option value="4">Sight Seeing</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="search-box-single type-box">
                                    <div class="searchbox-icon">
                                        <i class="bi bi-person-plus"></i>
                                    </div>
                                    <div class="searchbox-input">
                                        <label for="person-dropdown">Person</label>
                                        <select class="defult-select-drowpown" id="person-dropdown">
                                            <option selected value="0">01</option>
                                            <option value="1">02</option>
                                            <option value="2">03</option>
                                            <option value="3">04</option>
                                            <option value="4">05</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="search-box-single date-box">
                                    <div class="searchbox-icon">
                                        <i class="bi bi-capslock"></i>
                                    </div>
                                    <div class="searchbox-input date-picker-input">
                                        <label for="datepicker">When</label>
                                        <input placeholder="Select your date" type="text" name="checkIn" id="datepicker"
                                            value class="calendar">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="main-form-submit">
                            <button type="submit">Find Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="common-box home-content">
            <div class="container">
                <div class="title">
                    <h1>Experience the Himalayas with Ocean To Sky</h1>
                </div>
                <div class="row">
                    <div class="col-lg-8">
                        <article class="common-module mb-0">
                            <div>
                                <p>
                                    <strong>&ldquo;Embark on a journey of a lifetime with Ocean To Sky, your trusted
                                        companion in
                                        exploring the majestic peaks and vibrant cultures of Nepal, Tibet, and
                                        Bhutan.&rdquo;</strong>
                                </p>
                                <p>
                                    <b>Ocean To Sky</b> stands as a premier trekking and adventure organization, rooted
                                    in the heart of
                                    Kathmandu. With over a decade of experience, our passionate team has been crafting
                                    unforgettable
                                    experiences across the Himalayas. From thrilling jungle safaris to challenging
                                    mountaineering
                                    expeditions, serene paragliding adventures, and personalized tours of vibrant cities
                                    like Kathmandu,
                                    Lhasa, and Thimphu, we offer a diverse array of adventures.
                                </p>
                                <p>
                                    At Ocean To Sky, your satisfaction and safety are our top priorities. Our dedicated
                                    team of guides
                                    and porters are trained to the highest safety standards, ensuring a secure and
                                    enjoyable journey. We
                                    are fully registered with the Nepali government and esteemed local and international
                                    trekking
                                    associations. We invite you to join us and discover the unparalleled beauty and rich
                                    heritage of the
                                    Himalayas with Ocean To Sky, where every adventure is a story waiting to be told.
                                </p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <div class="common-box services pt-0">
            <div class="container">
                <ul class="row">
                    <li class="col-lg-3 col-md-4 home-content-1">
                        <div class="item" style="display: flex; gap: 5px;">
                            <span class="material-symbols-outlined" style="font-size: 50px;">
                                tour
                            </span>
                            <div>
                                <h4>Run by Local Experts</h4>
                                <p>
                                    Our experienced leaders and trail guides know the ins and
                                    outs of the best Himalayan trekking routes.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-4 home-content-1">
                        <div class="item" style="display: flex; gap: 5px;">
                            <span class="material-symbols-outlined" style="font-size: 50px;">
                                route
                            </span>
                            <div>
                                <h4>Authentic, Personalized Tours</h4>
                                <p>
                                    We’ll work directly with you to develop the customized
                                    travel package of your dreams.
                                </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-4 home-content-1">
                        <div class="item" style="display: flex; gap: 5px;">
                            <span class="material-symbols-outlined" style="font-size: 50px;">
                                paid
                            </span>
                            <div>
                                <h4>The Best Value and Service</h4>
                                <p>
                                    We work hard to deliver the best customer service at an
                                    affordable rate.
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <div class="package-area package-style-two pt-50 chain">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-8 col-sm-10">
                    <div class="section-head-alpha">
                        <h2>Best Selling Tours</h2>
                        <p>Explore our best-selling trekking tours that have captivated the hearts and souls of
                            adventurers from around the world. These tours are renowned for their stunning landscapes,
                            rich cultural experiences, and unforgettable moments.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-10">
                    <div class="package-btn text-lg-end">
                        <a href="{{route('pacakage')}}" class="button-fill-primary all-package-btn">View All Tour</a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-sm-10  fadeffect">
                    <div class="package-card-beta">
                        <div class="package-thumb">
                            <a href="{{route('langtang')}}"><img src="assets/images/package/Langtang-trek.jpg" alt></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>10 Day & 9 night</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{route('langtang')}}">Langtang Trek</a></h3>
                            <div class="p-card-bottom">
                                <div class="book-btn">
                                    <a href="{{route('langtang')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                                </div>
                                <div class="p-card-info">
                                    <span>From</span>
                                    <h6>$800<span>Per Person</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
                    <div class="package-card-beta">
                        <div class="package-thumb">
                            <a href="{{route('abc-circuit')}}"><img src="assets/images/package/annpurna-circuit-trek.jpg"
                                    alt></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>17 Day & 16 night</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{route('abc-circuit')}}">Annapurna Circuit</a></h3>
                            <div class="p-card-bottom">
                                <div class="book-btn">
                                    <a href="{{route('abc-circuit')}}">Book Now <i class="bx bxs-right-arrow-alt"></i></a>
                                </div>
                                <div class="p-card-info">
                                    <span>From</span>
                                    <h6>$1155<span>Per Person</span></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
                    <div class="package-card-beta">
                        <div class="package-thumb">
                            <a href="{{route('ebc')}}"><img src="assets/images/package/Everest base camp.jpeg"
                                    alt></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>15 Day & 14 night</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{route('ebc')}}">Everest Base Camp</a></h3>
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
                <div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
                    <div class="package-card-beta">
                        <div class="package-thumb">
                            <a href="{{route('gokyochola')}}"><img src="assets/images/package/Everest-Gokyo-Lake-1.jpg"
                                    alt></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>17 Day & 16 night</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{route('gokyochola')}}">Everest Base Camp Via Gokyo Chola
                                    Pass
                                </a></h3>
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
                <div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
                    <div class="package-card-beta">
                        <div class="package-thumb">
                            <a href="{{route('abc')}}"><img src="assets/images/package/annapurna-base-camp.jpeg"
                                    alt></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>12 Day & 11 night</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{route('abc')}}">Annapurna Base Camp</a></h3>
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
                <div class="col-lg-4 col-md-6 col-sm-10 fadeffect">
                    <div class="package-card-beta">
                        <div class="package-thumb">
                            <a href="{{route('poonhill')}}"><img
                                    src="assets/images/package/poon-hill-panorama-trek-1.jpg" alt></a>
                            <p class="card-lavel">
                                <i class="bi bi-clock"></i> <span>8 Day & 7 night</span>
                            </p>
                        </div>
                        <div class="package-card-body">
                            <h3 class="p-card-title"><a href="{{route('poonhill')}}">Ghorepani Poon Hill Trek</a></h3>
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
            </div>
            <div class="package-page-btn text-center mt-60">
                <a href="{{route('pacakage')}}" class="button-fill-round">View All</a>
            </div>
        </div>
    </div>


    <div class="destination-area destination-style-two pt-110 pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-sm-10 ">
                    <div class="section-head-alpha text-center mx-auto">
                        <h2>Top Destination</h2>
                        <p>Discover our top trekking destinations that promise adventure, natural beauty, and cultural
                            richness. Each destination offers a unique experience, captivating landscapes, and
                            unforgettable memories</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
                    <div class="destination-item">
                        <div class="destination-img">
                            <img src="assets/images/destination/Everest base camp2.jpg" alt>
                        </div>
                        <div class="destination-overlay">
                            <div class="content">
                                <a href="{{route('pacakage')}}">
                                    <h5>Everest Trip</h5>
                                </a>
                                <a href="{{route('pacakage')}}">
                                    <h6>10 Places</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
                    <div class="destination-item">
                        <div class="destination-img">
                            <img src="assets/images/destination/Annapurna-base-camp2.jpeg" alt>
                        </div>
                        <div class="destination-overlay">
                            <div class="content">
                                <a href="{{route('pacakage')}}">
                                    <h5>Annapurna Trip</h5>
                                </a>
                                <a href="{{route('pacakage')}}">
                                    <h6>15 Places</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
                    <div class="destination-item">
                        <div class="destination-img">
                            <img src="assets/images/destination/Langtang-trek.jpg" alt>
                        </div>
                        <div class="destination-overlay">
                            <div class="content">
                                <a href="{{route('pacakage')}}">
                                    <h5>Langtang Trip</h5>
                                </a>
                                <a href="{{route('pacakage')}}">
                                    <h6>8 Places</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
                    <div class="destination-item">
                        <div class="destination-img">
                            <img src="assets/images/destination/pokhara.jpeg" alt>
                        </div>
                        <div class="destination-overlay">
                            <div class="content">
                                <a href="{{route('pacakage')}}">
                                    <h5>Pokhara Trip</h5>
                                </a>
                                <a href="{{route('pacakage')}}">
                                    <h6>15 Places</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-10 fadeffect">
                    <div class="destination-item">
                        <div class="destination-img">
                            <img src="assets/images/destination/Lower-Mustang-Trek-1.jpg" alt>
                        </div>
                        <div class="destination-overlay">
                            <div class="content">
                                <a href="{{route('pacakage')}}">
                                    <h5>Mustang Trip</h5>
                                </a>
                                <a href="{{route('pacakage')}}">
                                    <h6>10 Places</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-10 fadeffect">
                    <div class="destination-item">
                        <div class="destination-img">
                            <img src="assets/images/destination/Mardi-Himal.jpg" alt>
                        </div>
                        <div class="destination-overlay">
                            <div class="content">
                                <a href="{{route('pacakage')}}">
                                    <h5>Mardi Himal Trip</h5>
                                </a>
                                <a href="{{route('pacakage')}}">
                                    <h6>11 Places</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="package-page-btn text-center mt-60">
                <a href="{{route('pacakage')}}" class="button-fill-round">View All Destinations</a>
            </div>
        </div>
    </div>


    <div class="upcoming-tour-area pt-110 pb-110 chain">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 d-flex justify-content-lg-start justify-content-center">
                    <div class="section-head-alpha text-lg-start text-center">
                        <h2 class="text-white">Upcoming Best Tours</h2>
                        <p class="text-white">Discover our upcoming best tours, meticulously planned to offer unique
                            experiences, breathtaking landscapes, and cultural immersion. Whether you're seeking
                            high-altitude challenges or serene trails, we have the perfect adventure waiting for you.
                        </p>
                    </div>
                </div>
                <div class="col-lg-7 d-flex justify-content-lg-end justify-content-center">
                    <div class="slider-arrows text-center d-lg-flex flex-row justify-content-center d-none gap-5">
                        <div class="testi-prev4" tabindex="0" role="button" aria-label="Previous slide"><i
                                class="bi bi-arrow-left"></i></div>
                        <div class="testi-next4" tabindex="0" role="button" aria-label="Next slide"><i
                                class="bi bi-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center fadeffect">
                <div class="col-lg-12">
                    <div class="swiper upcoming-tour">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="package-card-beta">
                                    <div class="package-thumb">
                                        <a href="#"><img src="assets/images/package/rara-1.jpg"
                                                alt></a>
                                        <p class="card-lavel">
                                            <i class="bi bi-clock"></i> <span>15 Day & 14 night</span>
                                        </p>
                                    </div>
                                    <div class="package-card-body">
                                        <h3 class="p-card-title"><a href="package-details.html">Rara Lake</a></h3>
                                        <div class="p-card-bottom">
                                            <div class="book-btn">
                                                <a href="#">Book Now <i
                                                        class="bx bxs-right-arrow-alt"></i></a>
                                            </div>
                                            <div class="p-card-info">
                                                <span>From</span>
                                                <h6>$1500 <span>Per Person</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card-beta">
                                    <div class="package-thumb">
                                        <a href="#"><img
                                                src="assets/images/package/Nar pur valley .jpg" alt></a>
                                        <p class="card-lavel">
                                            <i class="bi bi-clock"></i> <span>19 Day & 18 night</span>
                                        </p>
                                    </div>
                                    <div class="package-card-body">
                                        <h3 class="p-card-title"><a href="package-details.html">Nar Phu Valley Trek</a>
                                        </h3>
                                        <div class="p-card-bottom">
                                            <div class="book-btn">
                                                <a href="#">Book Now <i
                                                        class="bx bxs-right-arrow-alt"></i></a>
                                            </div>
                                            <div class="p-card-info">
                                                <span>From</span>
                                                <h6>$2000<span>Per Person</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card-beta">
                                    <div class="package-thumb">
                                        <a href="#"><img src="assets/images/package/Tilicholake.jpeg"
                                                alt></a>
                                        <p class="card-lavel">
                                            <i class="bi bi-clock"></i> <span>15 Day & 14 night</span>
                                        </p>
                                    </div>
                                    <div class="package-card-body">
                                        <h3 class="p-card-title"><a href="#">Tilicho Lake</a></h3>
                                        <div class="p-card-bottom">
                                            <div class="book-btn">
                                                <a href="#">Book Now <i
                                                        class="bx bxs-right-arrow-alt"></i></a>
                                            </div>
                                            <div class="p-card-info">
                                                <span>From</span>
                                                <h6>$1500 <span>Per Person</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card-beta">
                                    <div class="package-thumb">
                                        <a href="#"><img src="assets/images/package/Makalu trek.jpeg"
                                                alt></a>
                                        <p class="card-lavel">
                                            <i class="bi bi-clock"></i> <span>15 Day & 14 night</span>
                                        </p>
                                    </div>
                                    <div class="package-card-body">
                                        <h3 class="p-card-title"><a href="#">Makalu Trek </a></h3>
                                        <div class="p-card-bottom">
                                            <div class="book-btn">
                                                <a href="#">Book Now <i
                                                        class="bx bxs-right-arrow-alt"></i></a>
                                            </div>
                                            <div class="p-card-info">
                                                <span>From</span>
                                                <h6>$1599 <span>Per Person</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="package-card-beta">
                                    <div class="package-thumb">
                                        <a href="p#"><img src="assets/images/package/Dhaulagiri.jpg"
                                                alt></a>
                                        <p class="card-lavel">
                                            <i class="bi bi-clock"></i> <span>12 Day & 11 night</span>
                                        </p>
                                    </div>
                                    <div class="package-card-body">
                                        <h3 class="p-card-title"><a href="#">Dhaulagiri Trek</a></h3>
                                        <div class="p-card-bottom">
                                            <div class="book-btn">
                                                <a href="#">Book Now <i
                                                        class="bx bxs-right-arrow-alt"></i></a>
                                            </div>
                                            <div class="p-card-info">
                                                <span>From</span>
                                                <h6>$1299 <span>Per Person</span></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center d-flex justify-content-center">
                <div class="col-md-4">
                    <a href="{{route('pacakage')}}" class="button-outlined-primary upcoming-btn mt-50">View All Offer</a>
                </div>
            </div>
        </div>
    </div>




    <div class="guide-area guide-style-one pt-110 pb-110">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-10">
                    <div class="section-head-alpha text-center mx-auto">
                        <h2>Tour Guide</h2>
                        <p>Our dedicated team of tour guides is the heart of your trekking adventure. With years of
                            experience, local knowledge, and a passion for the Himalayas, our guides ensure that your
                            journey is not only safe but also rich with cultural insights and memorable experiences.</p>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center g-4">
                <div class="col-lg-4 col-md-6 col-md-10">
                    <div class="guide-card-beta">
                        <div class="guide-image">
                            <img src="assets/images/guide/guide31.png" alt>
                            <ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="guide-content">
                            <a href="guide.html">
                                <h4 class="guide-name">Prajwol Shrestha</h4>
                            </a>
                            <h6 class="guide-designation">Travel Associate</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-10">
                    <div class="guide-card-beta">
                        <div class="guide-image">
                            <img src="assets/images/guide/guide32.png" alt>
                            <ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="guide-content">
                            <a href="guide.html">
                                <h4 class="guide-name">Raju Pandey</h4>
                            </a>
                            <h6 class="guide-designation">Tour Guide</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-md-10">
                    <div class="guide-card-beta">
                        <div class="guide-image">
                            <img src="assets/images/guide/guide33.png" alt>
                            <ul class="guide-social-links d-flex justify-content-center flex-column gap-3">
                                <li><a href="#"><i class="bx bxl-instagram"></i></a></li>
                                <li><a href="#"><i class="bx bxl-facebook"></i></a></li>
                                <li><a href="#"><i class="bx bxl-twitter"></i></a></li>
                                <li><a href="#"><i class="bx bxl-whatsapp"></i></a></li>
                            </ul>
                        </div>
                        <div class="guide-content">
                            <a href="guide.html">
                                <h4 class="guide-name">Pushpa Bhandari</h4>
                            </a>
                            <h6 class="guide-designation">Accounts Head</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonial-area testimonial-style-three pt-110 pb-110">
        <div class="container-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-5 col-sm-10">
                    <div class="section-head-alpha text-lg-start text-center">
                        <h2 class="text-white">Travelers Review</h2>
                        <p class="text-white">At Ocean to Sky Adventures, we take pride in creating unforgettable
                            experiences for our travelers. But don’t just take our word for it—read what our adventurers
                            have to say about their journeys with us.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-10 d-flex justify-content-end">
                    <div class="slider-arrows text-center d-lg-flex flex-row d-none gap-5">
                        <div class="testi-prev4" tabindex="0" role="button" aria-label="Previous slide"> <i
                                class="bi bi-arrow-left"></i></div>
                        <div class="testi-next4" tabindex="0" role="button" aria-label="Next slide"><i
                                class="bi bi-arrow-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="swiper testimonial-slider-three">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card-beta mx-auto">
                                    <div class="testimonial-quote-icon">
                                        <img src="assets/images/icons/quote-review.svg" class="img-fluid" />
                                    </div>
                                    <div class="testimonial-card-body">
                                        <div class="testimonial-info">
                                            <div class="reviewr-info">
                                                <div class="single-thumb">
                                                    <img src="assets/images/reviewer/testi31.png" alt>
                                                </div>
                                                <div class="reviwer-info-cotn">
                                                    <h5 class="reviewer-name">Kajal Shrestha, Nepal</h5>
                                                    <ul class="reviewer-rating gap-2">
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-texts">
                                            <p>
                                                "Trekking in the Langtang Valley was a dream come true. The natural
                                                beauty and the warm welcome from the locals made it a memorable journey.
                                                The trek was well-organized, and our guide’s knowledge and support were
                                                invaluable. We’ll definitely be back for more adventures!. Best place
                                                for refreshment."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card-beta mx-auto">
                                    <div class="testimonial-quote-icon">
                                        <img src="assets/images/icons/quote-review.svg" class="img-fluid" />
                                    </div>
                                    <div class="testimonial-card-body">
                                        <div class="testimonial-info">
                                            <div class="reviewr-info">
                                                <div class="single-thumb">
                                                    <img src="assets/images/reviewer/testi32.png" alt>
                                                </div>
                                                <div class="reviwer-info-cotn">
                                                    <h5 class="reviewer-name">Sandesh Karki, Nepal</h5>
                                                    <ul class="reviewer-rating gap-2">
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-texts">
                                            <p>
                                                "The Mardi Himal Trek was an excellent choice for us. We loved the less
                                                crowded trails and the stunning panoramic views. The accommodation and
                                                food were great, and our guide was very professional and accommodating.
                                                It was an adventure we will cherish forever. Visit the place with your
                                                family and friends."
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card-beta mx-auto">
                                    <div class="testimonial-quote-icon">
                                        <img src="assets/images/icons/quote-review.svg" class="img-fluid" />
                                    </div>
                                    <div class="testimonial-card-body">
                                        <div class="testimonial-info">
                                            <div class="reviewr-info">
                                                <div class="single-thumb">
                                                    <img src="assets/images/reviewer/testi33.png" alt>
                                                </div>
                                                <div class="reviwer-info-cotn">
                                                    <h5 class="reviewer-name">David and Sarah, Australia</h5>
                                                    <ul class="reviewer-rating gap-2">
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                        <li>
                                                            <i class="bi bi-star-fill"></i>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-texts">
                                            <p>
                                                "Our trek to Everest Base Camp was nothing short of extraordinary. The
                                                breathtaking views, the welcoming Sherpa communities, and the expertise
                                                of our guides made this an adventure we will never forget. We felt safe
                                                and well taken care of every step of the way. Highly recommended!"
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="blog-area blog-style-two pt-110 pb-110">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-6 col-sm-10">
                    <div class="section-head-alpha">
                        <h2>Blogs</h2>
                        <p>Award winning stories and opinion to fill you life with advantures. </p>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-10">
                    <div class="package-btn text-lg-end">
                        <a href="{{route('blogs')}}" class="button-fill-primary all-package-btn">View All Post</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-beta">
                        <div class="blog-thumb">
                            <a href="{{route('blog1')}}">
                                <img src="assets/images/blog/Everest base camp2.jpeg" alt>
                            </a>
                            <div class="blog-lavel">
                                <a href="#">Novembar 16, 2023</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-body-top">
                                <a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By Jhon David </a>
                                <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> Novembar 16, 2023</a>
                            </div>
                            <h4 class="blog-title"><a href="{{route('blog1')}}">Hiking in the Himalayas: A Beginner’s
                                    Guide</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-beta">
                        <div class="blog-thumb">
                            <a href="{{route('blog4')}}">
                                <img src="assets/images/blog/idol_1721331i.jpg" alt>
                            </a>
                            <div class="blog-lavel">
                                <a href="#">June 16, 2023</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-body-top">
                                <a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By Kajal Shrestha
                                </a>
                                <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> June 16, 2023</a>
                            </div>
                            <h4 class="blog-title"><a href="{{route('blog4')}}">Discovering Nepal’s Rich Culture and
                                    Heritage</a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="blog-card-beta">
                        <div class="blog-thumb">
                            <a href="{{route('blog2')}}">
                                <img src="assets/images/blog/pokhara.jpeg" alt>
                            </a>
                            <div class="blog-lavel">
                                <a href="#">July 12, 2023</a>
                            </div>
                        </div>
                        <div class="blog-content">
                            <div class="blog-body-top">
                                <a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By Sandesh Karki
                                </a>
                                <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i>July 12, 2023</a>
                            </div>
                            <h4 class="blog-title"><a href="{{route('blog2')}}">Experience the Thrill of Adventure Sports
                                    in Pokhara</a></h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Partner Section -->

    <div class="social-activity-area mt-120 pb-90">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-sm-10">
                    <div class="section-head-alpha text-center mx-auto p-0">
                        <h2>Our Partners</h2>
                        <p>We team up with the best to give you unmatchable experience.</p>
                    </div>
                </div>
                <div class="swiper social-activity-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="social-card">
                                <div class="social-thumb">
                                    <img src="assets/images/gallary/Booking.Com-logo.png" alt>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="social-card">
                                <div class="social-thumb">
                                    <img src="assets/images/gallary/Tripadvisor-Logo.png" alt>
                                </div>

                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="social-card">
                                <div class="social-thumb">
                                    <img src="assets/images/gallary/Expedia-Logo.png" alt>
                                </div>

                            </a> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-update-section">
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center gy-5">
                <div class="col-lg-6 text-lg-start text-center">
                    <div class="more-update-content">
                        <h2>Join Us for More Update</h2>
                        <p>"Stay connected and never miss an update, and be the
                             first to know about our latest news, events, and exclusive offers."</p>
                    </div>
                </div>
                <div class="col-lg-3 text-lg-end text-center">
                    <button class="button-fill-primary update-btn">Join Now</button>
                </div>
            </div>
        </div>
    </div>

@endsection
