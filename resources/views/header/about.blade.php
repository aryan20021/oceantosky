@extends('layout')

@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">About Us</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">About Us</li>
            </ul>
        </div>
    </div>
</div>


<div class="about-main-wrappper pt-100">
    <div class="container">
        <div class="about-tab-wrapper">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="about-tab-image-grid text-center">
                        <div class="about-video d-inline-block">
                            <img src="assets/images/about/about-g2.png" alt>
                            <div class="video-overlay">
                                <a data-fancybox href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                    class="play-icon video-popup">
                                    <i class="bi bi-play-fill"></i>
                                </a>
                            </div>
                        </div>
                        <div class="row float-images g-4">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about-image">
                                    <img src="assets/images/about/about-g1.png" alt>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="about-image">
                                    <img src="assets/images/about/about-g3.png" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="about-tab-wrap">
                        <h2 class="about-wrap-title">
                            About Our Company And <span>What We Are</span> Offer.
                        </h2>
                        <div class="about-tab-switcher">
                            <ul class="nav nav-pills mb-3 justify-content-md-between justify-content-center"
                                id="about-tab-pills" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link active" id="pills-about1" data-bs-toggle="pill"
                                        data-bs-target="#about-pills1" role="tab" aria-controls="about-pills1"
                                        aria-selected="true">
                                        <h3>10</h3>
                                        <h6>Years Experience</h6>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link" id="pills-about2" data-bs-toggle="pill"
                                        data-bs-target="#about-pills2" role="tab" aria-controls="about-pills2"
                                        aria-selected="false">
                                        <h3>Mission &</h3>
                                        <h6>Vission</h6>
                                    </div>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <div class="nav-link" id="pills-about3" data-bs-toggle="pill"
                                        data-bs-target="#about-pills3" role="tab" aria-controls="about-pills3"
                                        aria-selected="false">
                                        <h3>Objectives</h3>
                                        <h6>OceanToSky</h6>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content about-tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="about-pills1" role="tabpanel"
                                aria-labelledby="pills-about1">
                                <p>We at OceanToSky provide over a decade of experience hiking in the breathtaking
                                    Himalayas. Our seasoned guides provide a safe and fascinating experience since
                                    they are knowledgeable about the area geography, customs, and safety. We provide
                                    a range of trekking routes to suit the abilities of all trekkers, from the
                                    well-known Everest and Annapurna paths to the lesser-known treasures of Dolpo
                                    and Mustang. We use eco-friendly procedures and have a strong commitment to
                                    sustainable tourism, including close collaboration with the community. Every
                                    trek is a unique experience because of our commitment to safety, cultural
                                    immersion, and individualized care. Come see the stunning scenery and opulent
                                    customs of Nepal with us, and let our expertise craft your own unique trip.</p>
                            </div>
                            <div class="tab-pane fade" id="about-pills2" role="tabpanel"
                                aria-labelledby="pills-about2">
                                <p> At Ocean to Sky Adventures, we strive to offer thrilling and unforgettable
                                    experiences for adventure enthusiasts worldwide. We are committed to pushing the
                                    limits of exploration, fostering a deep connection with nature, and ensuring our
                                    travelers' safety, comfort, and enjoyment. Our goal is to create transformative
                                    journeys that foster personal growth and appreciation for the natural and
                                    cultural heritage of our destinations.</p>

                                <p> We aim to be a global leader in adventure travel, known for pioneering
                                    expeditions to awe-inspiring locations. We aspire to be the top choice for
                                    adventurers seeking thrilling, well-crafted journeys that challenge limits while
                                    promoting sustainable tourism and environmental preservation. Through our
                                    dedication to excellence, safety, and cultural immersion, we seek to inspire
                                    wonder and respect for the world's diverse landscapes and communities
                                </p>
                            </div>
                            <div class="tab-pane fade" id="about-pills3" role="tabpanel"
                                aria-labelledby="pills-about3">
                                <p>Our main goal at Ocean to Sky Adventures is to guarantee maximum client
                                    satisfaction by offering outstanding adventure experiences and prompt service.
                                    We always work to improve our safety protocols because we value our passengers'
                                    health and safety above all else. By offering intriguing new locations that
                                    appeal to a wide range of adventure interests, we want to broaden our horizons.
                                    Our aim is centered on sustainability; we assist local communities, adopt
                                    environmentally friendly methods, and participate in conservation activities.
                                    Our success is mostly dependent on innovation, thus we work hard to develop
                                    cutting-edge adventure Fconcepts that help us stand out from the competition. In
                                    order to guarantee genuine and excellent experiences, we establish strategic
                                    alliances and partnerships. It is crucial to us to increase brand awareness and
                                    trust via successful marketing and favourable reviews. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-100 align-items-center">
            <div class="col-lg-6">
                <div class="achievement-counter-wrap">
                    <h2 class="about-wrap-title">
                        Why Package Book With
                        <span>OceanToSky?</span>
                    </h2>
                    <div class="achievement-counter-cards">
                        <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center ">
                            <div class="counter-box mb-sm-0 mb-3">
                                <h2>700+</h2>
                                <h6>Awesome Tour</h6>
                            </div>
                            <p>At Ocean to Sky Adventures, we offer a diverse range of meticulously crafted tours
                                that promise unforgettable experiences. Our packages cater to all adventure levels,
                                from serene nature walks to exhilarating high-altitude treks. Each tour is designed
                                to provide a perfect blend of adventure, relaxation, and cultural immersion,
                                ensuring a memorable journey.</p>
                        </div>
                        <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
                            <div class="counter-box mb-3">
                                <h2>400+</h2>
                                <h6>Destinations</h6>
                            </div>
                            <p>Our tours take you to some of the world’s most breathtaking destinations. Explore the
                                majestic landscapes of the Himalayas, the serene beauty of Nepal’s valleys, and the
                                hidden gems of remote regions. Each destination is carefully selected to offer a
                                unique experience, showcasing the natural and cultural wonders of the region.</p>
                        </div>
                        <div class="achievement-counter-card flex-sm-row flex-column text-sm-start text-center">
                            <div class="counter-box mb-3">
                                <h2>250+</h2>
                                <h6> Mountains</h6>
                            </div>
                            <p>Experience the thrill of trekking through the world’s highest and most iconic
                                mountain ranges. Our expert guides will lead you through the awe-inspiring
                                Himalayas, including the legendary Everest, Annapurna, and Langtang regions. Whether
                                you’re a seasoned climber or a first-time trekker, our mountain adventures are
                                designed to challenge and inspire you.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-image-group mt-5 mt-lg-0">
                    <img src="assets/images/about/about-image-group2.png" alt class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="testimonial-area testimonial-style-one mt-120">
    <div class="testimonial-shape-group"></div>
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="section-head-alpha">
                    <h2>What Our Client Say About Us</h2>
                    <p>At Ocean to Sky Adventures, we take pride in creating unforgettable experiences for our
                        travelers. But don’t just take our word for it—read what our adventurers have to say about
                        their journeys with us.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="slider-arrows text-center d-lg-flex d-none justify-content-end mb-3">
                    <div class="testi-prev custom-swiper-prev" tabindex="0" role="button"
                        aria-label="Previous slide"> <i class="bi bi-chevron-left"></i> </div>
                    <div class="testi-next custom-swiper-next" tabindex="0" role="button" aria-label="Next slide"><i
                            class="bi bi-chevron-right"></i></div>
                </div>
            </div>
        </div>
        <div class="swiper testimonial-slider-one position-relative">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card testimonial-card-alpha">
                        <div class="testimonial-overlay-img">
                            <img src="assets/images/reviewer/r-sm1.png" alt>
                        </div>
                        <div class="testimonial-card-top">
                            <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                            <div class="testimonial-thumb"><img src="assets/images/reviewer/r-sm1.png" alt></div>
                            <h3 class="testimonial-count">01</h3>
                        </div>
                        <div class="testimonial-body">
                            <p>"Our trek to Everest Base Camp was nothing short of extraordinary. The
                                breathtaking views, the welcoming Sherpa communities, and the expertise
                                of our guides made this an adventure we will never forget. We felt safe
                                and well taken care of every step of the way. Highly recommended!"</p>
                            <div class="testimonial-bottom">
                                <div class="reviewer-info">
                                    <h4 class="reviewer-name">David And Sarah</h4>
                                    <h6>Traveller</h6>
                                </div>
                                <ul class="testimonial-rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card testimonial-card-alpha">
                        <div class="testimonial-overlay-img">
                            <img src="assets/images/reviewer/r-sm2.png" alt>
                        </div>
                        <div class="testimonial-card-top">
                            <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                            <div class="testimonial-thumb"><img src="assets/images/reviewer/r-sm2.png" alt></div>
                            <h3 class="testimonial-count">02</h3>
                        </div>
                        <div class="testimonial-body">
                            <p>"The Mardi Himal Trek was an excellent choice for us. We loved the less
                                crowded trails and the stunning panoramic views. The accommodation and
                                food were great, and our guide was very professional and accommodating.
                                It was an adventure we will cherish forever. Visit the place with your
                                family and friends."</p>
                            <div class="testimonial-bottom">
                                <div class="reviewer-info">
                                    <h4 class="reviewer-name">Sandesh Karki</h4>
                                    <h6>Traveller</h6>
                                </div>
                                <ul class="testimonial-rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card testimonial-card-alpha">
                        <div class="testimonial-overlay-img">
                            <img src="assets/images/reviewer/r-sm3.png" alt>
                        </div>
                        <div class="testimonial-card-top">
                            <div class="qoute-icon"><i class="bx bxs-quote-left"></i></div>
                            <div class="testimonial-thumb"><img src="assets/images/reviewer/r-sm3.png" alt></div>
                            <h3 class="testimonial-count">03</h3>
                        </div>
                        <div class="testimonial-body">
                            <p> "Trekking in the Langtang Valley was a dream come true. The natural
                                beauty and the warm welcome from the locals made it a memorable journey.
                                The trek was well-organized, and our guide’s knowledge and support were
                                invaluable. We’ll definitely be back for more adventures!. Best place
                                for refreshment."</p>
                            <div class="testimonial-bottom">
                                <div class="reviewer-info">
                                    <h4 class="reviewer-name">Kajal Shrestha</h4>
                                    <h6>Traveller</h6>
                                </div>
                                <ul class="testimonial-rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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


<div class="blog-area blog-style-two pt-110 pb-110">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-6 col-sm-10">
                <div class="section-head-alpha">
                    <h2>Latest Blogs</h2>
                    <p>Award winning stories and opinion to fill you life with advantures. </p>
                </div>
            </div>
            <div class="col-lg-6 col-sm-10">
                <div class="package-btn text-lg-end">
                    <a href="blog-sidebar.html" class="button-fill-primary all-package-btn">View All Post</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card-beta">
                    <div class="blog-thumb">
                        <a href="blog-details.html">
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
                        <h4 class="blog-title"><a href="blog-details.html">Hiking in the Himalayas: A Beginner’s
                                Guide</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card-beta">
                    <div class="blog-thumb">
                        <a href="blog-details.html">
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
                        <h4 class="blog-title"><a href="blog-details.html">Discovering Nepal’s Rich Culture and
                                Heritage</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card-beta">
                    <div class="blog-thumb">
                        <a href="blog-details.html">
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
                        <h4 class="blog-title"><a href="blog-details.html">Experience the Thrill of Adventure Sports
                                in Pokhara</a></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
