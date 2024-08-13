@extends('layout')

@section('content')

<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Langtang Valley</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Package details</li>
            </ul>
        </div>
    </div>
</div>

<div class="package-details-wrapper pt-76">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8">
                <div class="tour-package-details">
                    <div class="pd-header">
                        <div class=" pd-top row row-cols-lg-4 row-cols-md-2 row-cols-2 gy-4">
                            <div class="col">
                                <div class="pd-single-info">
                                    <div class="info-icon">
                                        <img src="assets/images/icons/pd1.svg" alt>
                                    </div>
                                    <div class="info">
                                        <h6>Duration</h6>
                                        <span>10 Days</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="pd-single-info">
                                    <div class="info-icon">
                                        <img src="assets/images/icons/pd2.svg" alt>
                                    </div>
                                    <div class="info">
                                        <h6>Tour Type</h6>
                                        <span>Hiking</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="pd-single-info">
                                    <div class="info-icon">
                                        <img src="assets/images/icons/pd3.svg" alt>
                                    </div>
                                    <div class="info">
                                        <h6>Group Size</h6>
                                        <span>10 People</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="pd-single-info">
                                    <div class="info-icon">
                                        <img src="assets/images/icons/pd4.svg" alt>
                                    </div>
                                    <div class="info">
                                        <h6>Tour Guide</h6>
                                        <span>04 People</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pd-thumb">
                            <img src="assets/images/package/lantang.jpg" alt>
                        </div>
                        <div class="header-bottom">
                            <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <h5 class="location"><i class="bi bi-geo-alt"></i> Langtang Valley Trek, Langtang
                                </h5>
                                <ul class="d-flex align-items-center rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h2 class="pd-title">Langtang Valley</h2>
                        </div>
                    </div>
                    <div class="package-details-tabs">
                        <ul class="nav nav-pills tab-switchers gap-xxl-4 gap-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-package1" data-bs-toggle="pill"
                                    data-bs-target="#pill-body1" type="button" role="tab" aria-controls="pill-body1"
                                    aria-selected="true"><i class="bi bi-info-lg"></i> Information</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-package2" data-bs-toggle="pill"
                                    data-bs-target="#pill-body2" type="button" role="tab" aria-controls="pill-body2"
                                    aria-selected="false"> <i class="bi bi-file-earmark-spreadsheet"></i> Travel
                                    Plan</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-package3" data-bs-toggle="pill"
                                    data-bs-target="#pill-body3" type="button" role="tab" aria-controls="pill-body3"
                                    aria-selected="false"><i class="bi bi-images"></i> Tour Gallery</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-package4" data-bs-toggle="pill"
                                    data-bs-target="#pill-body4" type="button" role="tab" aria-controls="pill-body4"
                                    aria-selected="false"><i class="bi bi-geo-alt"></i> Location</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active package-info-tab mt-3" id="pill-body1"
                                role="tabpanel" aria-labelledby="pills-package1">
                                <h3 class="d-subtitle">Package Details</h3>
                                <p>An excellent trek if you are a little short on time or are nervous of starting on
                                    one of our longer, higher altitude expeditions. Despite being shorter, the
                                    Langtang trek captures all the best of Himalayan trekking with stunning scenery
                                    and fascinating culture. <br>

                                    This trek in the spectacular Langtang Valley is the closest you can get to the
                                    massive snow-capped mountains from the Kathmandu Valley. The Langtang Valley
                                    starts just north of Kathmandu, close to the border with Tibet. The valley is
                                    dominated by Langtang Lirung (7246m), the highest peak in the area. This is a
                                    superb introduction to trekking in Nepal among some of the most beautiful
                                    scenery in the whole country.</p>
                                <div class="p-info-featured-img row position-relative g-4 row-cols-1 row-cols-sm-2">
                                    <div class="col">
                                        <div class="featured-img">
                                            <img src="assets/images/package/Langtang-trek.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-img">
                                            <img src="assets/images/package/lantang.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="featured-video position-absolute ">
                                        <img src="assets/images/package/feat-img3.png" alt>
                                        <div class="video-overlay">
                                            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"
                                                class="play-icon video-popup" data-fancybox>
                                                <i class="bi bi-play-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <table class="table package-info-table mb-0">
                                    <tbody>
                                        <tr>
                                            <th>Destination</th>
                                            <td>Kyanjin</td>
                                        </tr>
                                        <tr>
                                            <th>Depature</th>
                                            <td>Kathmandu</td>
                                        </tr>
                                        <tr>
                                            <th>Departure Time</th>
                                            <td>01 April, 2021 10.00AM</td>
                                        </tr>
                                        <tr>
                                            <th>Return Time</th>
                                            <td>08 April, 2021 10.00AM</td>
                                        </tr>
                                        <tr>
                                            <th>Included</th>
                                            <td>
                                                <ul class="included-list">
                                                    <li><i class="bi bi-check2"></i>Hotel stay for one night before
                                                        and two nights after the trek </li>
                                                    <li> <i class="bi bi-check2"></i>All airport transfers</li>
                                                    <li><i class="bi bi-check2"></i> Return flight between Kathmandu
                                                        and Lukla</li>
                                                    <li><i class="bi bi-check2"></i>National Park entry and TIMS
                                                        fees</li>
                                                    <li><i class="bi bi-check2"></i>A fully supported trek with a
                                                        qualified mountain guide </li>
                                                    <li> <i class="bi bi-check2"></i>1 porters for 2 trekkers </li>
                                                    <li><i class="bi bi-check2"></i> Meals on the trek three meals
                                                        per day </li>
                                                    <li><i class="bi bi-check2"></i>Access to emergency oxygen and
                                                        first aid kit</li>
                                                    <li><i class="bi bi-check2"></i>Teahouse accommodation on a room
                                                        only basis </li>
                                                    <li> <i class="bi bi-check2"></i>All drinking water on the trek
                                                    </li>

                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Excluded</th>
                                            <td>
                                                <ul class="excluded-list">
                                                    <li><i class="bi bi-x-lg"></i> International airfares and visas
                                                    </li>
                                                    <li> <i class="bi bi-x-lg"></i> Personal items</li>
                                                    <li><i class="bi bi-x-lg"></i> Tips for your guides and porters
                                                    </li>
                                                    <li><i class="bi bi-x-lg"></i> Travel insurance (Must be
                                                        insured, and specifically for treks up to 6000m)</li>
                                                    <li><i class="bi bi-x-lg"></i> Your personal trekking gear</li>
                                                    <li><i class="bi bi-x-lg"></i> Your personal medicines or
                                                        prescriptions</li>
                                                    <li><i class="bi bi-x-lg"></i> Meals and drinks in Kathmandu
                                                        (breakfast is included)</li>
                                                    <li><i class="bi bi-x-lg"></i>Hot and cold drinks during trek
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2" class="tour-transport-col">
                                                <div
                                                    class="tour-transport  d-flex align-items-center justify-content-center">
                                                    <img src="assets/images/icons/bus.svg" alt> <span>Plane</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="rating-overview">
                                    <h3 class="d-subtitle">Overview</h3>
                                    <div class="rating-overview-row row g-0">
                                        <div class="col-lg-4 col-md-5 col-sm-5">
                                            <div
                                                class="total-rating d-flex justify-content-center align-items-center flex-column h-100 ">
                                                <h3>10.00</h3>
                                                <h5>Excellent</h5>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-7 col-sm-7">
                                            <div class="rating-info">
                                                <div class="rating-box">
                                                    <h6>Accommodation <span>5.0</span></h6>
                                                    <div class="rating-bar"></div>
                                                </div>
                                                <div class="rating-box">
                                                    <h6>Transport <span>5.0</span></h6>
                                                    <div class="rating-bar"></div>
                                                </div>
                                                <div class="rating-box">
                                                    <h6>Comfort <span>5.0</span></h6>
                                                    <div class="rating-bar"></div>
                                                </div>
                                                <div class="rating-box">
                                                    <h6>Hospitality <span>5.0</span></h6>
                                                    <div class="rating-bar"></div>
                                                </div>
                                                <div class="rating-box">
                                                    <h6>Food <span>5.0</span></h6>
                                                    <div class="rating-bar"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-section">
                                    <ul class="comment-list">
                                        <li class="single-comment d-flex flex-sm-row flex-column ">
                                            <div class="commmentor">
                                                <img src="assets/images/reviewer/commertor2.png" alt>
                                            </div>
                                            <div class="comment mt-4 mt-sm-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="info">
                                                        <h6>Silvia Perry</h6>
                                                        <span>2 April, 2021 10.00PM</span>
                                                    </div>
                                                    <ul class="rating d-flex ">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                </div>
                                                <p>The views in Langtang Valley were simply stunning. The trek was challenging at times, but the peaceful surroundings and the friendliness of the locals made it a rewarding experience. </p>
                                                <div class="reply-btn">
                                                    <a href="#"><i class="bi bi-reply-all-fill"></i> Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-comment d-flex flex-sm-row flex-column">
                                            <div class="commmentor">
                                                <img src="assets/images/reviewer/commertor3.png" alt>
                                            </div>
                                            <div class="comment mt-4 mt-sm-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="info">
                                                        <h6>Lilyan Antu</h6>
                                                        <span>2 April, 2021 10.00PM</span>
                                                    </div>
                                                    <ul class="rating d-flex ">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                </div>
                                                <p>Langtang Valley is a trekker's paradise. The valley's beauty is unmatched, and the hospitality of the local people made the trek even more special. I highly recommend this trek to anyone looking for a serene adventure. </p>
                                                <div class="reply-btn">
                                                    <a href="#"><i class="bi bi-reply-all-fill"></i> Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="single-comment d-flex flex-sm-row flex-column">
                                            <div class="commmentor">
                                                <img src="assets/images/reviewer/commertor1.png" alt>
                                            </div>
                                            <div class="comment mt-4 mt-sm-0">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="info">
                                                        <h6>Adama Grof</h6>
                                                        <span>2 April, 2021 10.00PM</span>
                                                    </div>
                                                    <ul class="rating d-flex ">
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                        <li><i class="bi bi-star-fill"></i></li>
                                                    </ul>
                                                </div>
                                                <p>The Langtang Valley trek was a hidden gem. The landscapes were beautiful, and the trek was less crowded, allowing for a more peaceful experience. The local culture we encountered added so much to the journey.</p>
                                                <div class="reply-btn">
                                                    <a href="#"><i class="bi bi-reply-all-fill"></i> Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="comment-btn text-center">
                                        <a href="#">View All Comment</a>
                                    </div>
                                </div>
                                <form action="#" id="comment_form" method="post">
                                    <div class="comment-form mt-110">
                                        <h4>Leave Your Comment</h4>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="custom-input-group">
                                                    <input type="text" placeholder="Your Full Name" id="name1">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="custom-input-group">
                                                    <input type="text" placeholder="Your Email" id="email1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="custom-input-group">
                                            <input type="text" placeholder="Tour Type" id="type">
                                        </div>
                                        <div class="custom-input-group">
                                            <textarea cols="20" rows="7" placeholder="Write Message"></textarea>
                                        </div>
                                        <ul class="form-rating d-flex">
                                            <li><i class="bi bi-star"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                            <li><i class="bi bi-star"></i></li>
                                        </ul>
                                        <div class="custom-input-group">
                                            <div class="submite-btn">
                                                <button type="submit">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade package-plan-tab tab-body mt-3" id="pill-body2"
                                role="tabpanel" aria-labelledby="pills-package2">
                                <h3 class="d-subtitle">Details</h3>
                                <p>Here is the detail plan and route for the campaign.</p>
                                <div class="accordion plans-accordion" id="planAccordion">
                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingOne">
                                            <div class="accordion-button" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse1" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>01</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 1 : Arrive in Kathmandu</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse1" class="accordion-collapse collapse show"
                                            aria-labelledby="planHeadingOne" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>All trekkers need to organise their own flights to Kathmandu
                                                    International Airport (KTM). From Kathmandu Airport we will
                                                    arrange a private transfer to your hotel. That night or early
                                                    the next morning you will meet your local Kandoo representative
                                                    and have a full pre-trek briefing.</p>
                                                <ul>
                                                    <li><i class="bi bi-check-lg"></i> Specilaized Bilingual Guide
                                                    </li>
                                                    <li><i class="bi bi-check-lg"></i> Private Transport</li>
                                                    <li><i class="bi bi-check-lg"></i> Entrance Fees</li>
                                                    <li><i class="bi bi-check-lg"></i> Box Lunch,Water,Dinner and
                                                        Snacks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingTwo">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse2" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>02</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 2 : Drive to Syabru Besi</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>From Kathmandu, we take a long (approx. 8 hours) drive to Syabru
                                                    Besi. After driving for 30km, we approach pristine villages on
                                                    the banks of the river Trishuli. We also start to get views of
                                                    the Annapurnas, Manaslu, Ganesh Himal and the peaks of the
                                                    Langtang region.</p>
                                                <ul>
                                                    <li><i class="bi bi-check-lg"></i> Specilaized Bilingual Guide
                                                    </li>
                                                    <li><i class="bi bi-check-lg"></i> Private Transport</li>
                                                    <li><i class="bi bi-check-lg"></i> Entrance Fees</li>
                                                    <li><i class="bi bi-check-lg"></i> Box Lunch,Water,Dinner and
                                                        Snacks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingThree">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse3" aria-expanded="true"
                                                aria-controls="planCollapse1" role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>03</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 3 : Trek to Lama Hotel</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse3" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingThree" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Today we start our trek by traversing the ridge on Syabru Besi’s
                                                    main road and soon reach Ghopcha Khola. Terraced fields and
                                                    dense forest with a variety of plant species like oaks, maple,
                                                    alder and bamboo open up. We may get to see yellow-throated
                                                    martin, wild boar, langur monkey, red panda and Himalayan black
                                                    bear en route. Further on, the trail crosses a stream and we
                                                    pass several small bhattis (tea shops) along the way. As we
                                                    continue ascending steeply along the trail, we come across a
                                                    steel suspension bridge at 2000m where we will cross to the
                                                    north bank of the Langtang Khola amid the spectacular vistas of
                                                    cascading waterfalls. On reaching 2748 metres, we arrive at Lama
                                                    Hotel where we will spend the night.</p>
                                                <ul>
                                                    <li><i class="bi bi-check-lg"></i> Specilaized Bilingual Guide
                                                    </li>
                                                    <li><i class="bi bi-check-lg"></i> Private Transport</li>
                                                    <li><i class="bi bi-check-lg"></i> Entrance Fees</li>
                                                    <li><i class="bi bi-check-lg"></i> Box Lunch,Water,Dinner and
                                                        Snacks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingFour">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse4" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>04</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 4 : Trek to Langtang Village</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse4" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingFour" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>From Lama Hotel, we ascend above the Langtang Khola where the
                                                    trail becomes steeper. From here we can see the beautiful
                                                    Langtang Lirung rising up to 7246m. The trail takes us across a
                                                    log bridge and on to the meadows of Ghora Tabela at 3000m. We
                                                    will see several lodges and a police check post. Further on, the
                                                    route opens up into a wide valley of yak pastures and scattered
                                                    Tamang villages with water-driven mills and prayer wheels. We
                                                    arrive at Langtang village (3500m) which is headquarters for
                                                    Langtang National Park. The village mainly consists of
                                                    flat-roofed Tibetan style houses, hotels and cultivated lands
                                                    yielding buckwheat, potatoes, wheat, turnips and barley.</p>
                                                <ul>
                                                    <li><i class="bi bi-check-lg"></i> Specilaized Bilingual Guide
                                                    </li>
                                                    <li><i class="bi bi-check-lg"></i> Private Transport</li>
                                                    <li><i class="bi bi-check-lg"></i> Entrance Fees</li>
                                                    <li><i class="bi bi-check-lg"></i> Box Lunch,Water,Dinner and
                                                        Snacks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingFive">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse5" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>05</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 5 : Trek to Kyanjin</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse5" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Today, the trail skirts gradually through rich yak pastures and
                                                    interesting traditional villages of Muna and Singdun. We cross a
                                                    wooden cantilever bridge and reach a wide valley after climbing
                                                    across the glacial moraine. Finally, we climb up through the
                                                    mountain pass to reach Kyangjin Gompa where there is a small
                                                    monastery and a cheese factory.

                                                </p>
                                                <ul>
                                                    <li><i class="bi bi-check-lg"></i> Specilaized Bilingual Guide
                                                    </li>
                                                    <li><i class="bi bi-check-lg"></i> Private Transport</li>
                                                    <li><i class="bi bi-check-lg"></i> Entrance Fees</li>
                                                    <li><i class="bi bi-check-lg"></i> Box Lunch,Water,Dinner and
                                                        Snacks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingTwo">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse2" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>06</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 6 : Exploration to Kyangjin</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>The furthest point of our trek, we will spend the day in Kyangjin
                                                    where you will get the opportunity to explore the ancient
                                                    monastery and cheese factory and just generally soak up the
                                                    atmosphere. If you are feeling strong you can choose to climb
                                                    Kyangjin Ri (4600m) from where you will get amazing views of the
                                                    snow-capped peaks and glaciers.</p>
                                                <ul>
                                                    <li><i class="bi bi-check-lg"></i> Specilaized Bilingual Guide
                                                    </li>
                                                    <li><i class="bi bi-check-lg"></i> Private Transport</li>
                                                    <li><i class="bi bi-check-lg"></i> Entrance Fees</li>
                                                    <li><i class="bi bi-check-lg"></i> Box Lunch,Water,Dinner and
                                                        Snacks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingTwo">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse2" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>07</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 7 : Trek to Lama Hotel</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>From Kyangjin, we take the route back to Lama Hotel. As we
                                                    retrace our steps, we follow the Langtang Khola to Langtang
                                                    village and on to Ghora Tabela. We stop briefly for lunch and
                                                    thereafter continue the steep descent to Lama Hotel.</p>
                                                <ul>
                                                    <li><i class="bi bi-check-lg"></i> Specilaized Bilingual Guide
                                                    </li>
                                                    <li><i class="bi bi-check-lg"></i> Private Transport</li>
                                                    <li><i class="bi bi-check-lg"></i> Entrance Fees</li>
                                                    <li><i class="bi bi-check-lg"></i> Box Lunch,Water,Dinner and
                                                        Snacks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingTwo">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse2" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>08</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 8 : Trek to Syabru Besi</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>From Lama Hotel, we head back to Syabru Besi where we will have
                                                    the opportunity to get an insight into the ancient culture and
                                                    customs of the Tamang community.</p>
                                                <ul>
                                                    <li><i class="bi bi-check-lg"></i> Specilaized Bilingual Guide
                                                    </li>
                                                    <li><i class="bi bi-check-lg"></i> Private Transport</li>
                                                    <li><i class="bi bi-check-lg"></i> Entrance Fees</li>
                                                    <li><i class="bi bi-check-lg"></i> Box Lunch,Water,Dinner and
                                                        Snacks</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingTwo">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse2" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>09</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 9 : Drive to Kathmandu</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>After a most remarkable time and trekking on Langtang Valley
                                                    around we take a drive in the morning where the overland journey
                                                    takes you back to Kathmandu, on completing wonderful adventure
                                                    on Langtang Valley Trekking.</p>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingTwo">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse2" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>10</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 10 : Departure</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Today is the last day of your trip to Nepal. Our representatives
                                                    will transfer you to the international airport 3 hours before
                                                    your flight schedule with warm greetings hoping to see you next
                                                    time in Nepal.</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade package-gallary-tab mt-3" id="pill-body3" role="tabpanel"
                                aria-labelledby="pills-package3">
                                <div class="row g-4">
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <a href="assets/images/package/lantang.jpg"
                                                data-fancybox="gallery" data-caption="Caption Here"><img
                                                    src="assets/images/package/lantang.jpg" alt></a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <a href="assets/images/package/Langtang-trek.jpg"
                                                data-fancybox="gallery" data-caption="Caption Here"><img
                                                    src="assets/images/package/Langtang-trek.jpg" alt></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel"
                                aria-labelledby="pills-package4">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe id="gmap_canvas"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d225129.320488257!2d85.42107609445796!3d28.15727408153042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eaf59151a18e1d%3A0xa1618c2dc7e4fa26!2sLangtang%20Valley%20Trek!5e0!3m2!1sen!2snp!4v1723044737375!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a
                                            href="https://123movies-to.org/"></a><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="package-sidebar">
                    <aside class="package-widget-style-2 widget-form mt-30">
                        <div class="widget-title text-center d-flex justify-content-between">
                            <h4>Book This Tour</h4>
                            <h3 class="widget-lavel">$800 <span>Per Person</span></h3>
                        </div>
                        <div class="widget-body">
                            <form action="#" method="post" id="booking-form">
                                <div class="booking-form-wrapper">
                                    <div class="custom-input-group">
                                        <input type="text" placeholder="Your Full Name" id="name">
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="email" placeholder="Your Email" id="email">
                                    </div>
                                    <div class="custom-input-group">
                                        <input type="tel" placeholder="Phone" id="phone">
                                    </div>
                                    <div class="custom-input-group">
                                        <i class="bi bi-chevron-down"></i>
                                        <select id="ticket_type">
                                            <option selected>Tickets Type</option>
                                            <option value="1">Tickets Type 1</option>
                                            <option value="2">Tickets Type 2</option>
                                            <option value="3">Tickets Type 3</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="custom-input-group">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="truist-adult">
                                                    <option selected>Adult</option>
                                                    <option value="1"> 1</option>
                                                    <option value="2"> 2</option>
                                                    <option value="3"> 3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="custom-input-group ">
                                                <i class="bi bi-chevron-down"></i>
                                                <select id="tourist-child">
                                                    <option selected>Child</option>
                                                    <option value="1"> 1</option>
                                                    <option value="2">2</option>
                                                    <option value="3"> 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="custom-input-group">
                                        <i class="bi bi-calendar3"></i>
                                        <input placeholder="Select your date" type="text" name="checkIn"
                                            id="datepicker2" value class="calendar">
                                    </div>
                                    <div class="custom-input-group">
                                        <textarea cols="20" rows="7" placeholder="Your message"></textarea>
                                    </div>
                                    <div class="custom-input-group">
                                        <div class="submite-btn">
                                            <button type="submit">Book Now</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <aside class="package-widget-style-2 widget-tag-cloud mt-30">
                        <div class="widget-title text-center">
                            <h4>Package Tag</h4>
                        </div>
                        <div class="tag-cloud widget-body">
                            <a href="#">Adventure</a>
                            <a href="#">Trip</a>
                            <a href="#">Guided</a>
                            <a href="#">Historical</a>
                            <a href="#">Road Trips</a>
                            <a href="#">Tourist</a>
                            <a href="#">Weekend</a>
                            <a href="#">Hill</a>
                        </div>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection
