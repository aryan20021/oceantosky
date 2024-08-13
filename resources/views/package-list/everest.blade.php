@extends('layout')

@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Everest Base Camp</h2>
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
                                        <span>15 Days</span>
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
                            <img src="assets/images/package/Everest base camp.jpeg" alt>
                        </div>
                        <div class="header-bottom">
                            <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <h5 class="location"><i class="bi bi-geo-alt"></i> Everest Base Camp Trek,
                                    Solukhumbu</h5>
                                <ul class="d-flex align-items-center rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h2 class="pd-title">Everest Base Camp.</h2>
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
                                <p>The trek to Everest Base Camp is one of the world’s great iconic walks. If you
                                    love walking, this has to be on your bucket list! Our lodge-based trek follows
                                    faithfully in the footsteps of Edmund Hillary allowing plenty of time to
                                    acclimatise properly and enjoy the scenery. The trek starts with the
                                    rollercoaster flight into Lukla, before following the spectacular Khumbu Valley
                                    to Everest Base Camp. A short climb to the top of Kala Pattar gives
                                    breath-taking views of the highest mountain on earth, before re-tracing our
                                    steps back to Lukla</p>
                                <div class="p-info-featured-img row position-relative g-4 row-cols-1 row-cols-sm-2">
                                    <div class="col">
                                        <div class="featured-img">
                                            <img src="assets/images/package/Everest base camp.jpeg" alt>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-img">
                                            <img src="assets/images/package/Everest-Gokyo-Lake-1.jpg" alt>
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
                                            <td>Everest Camp</td>
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
                                                <p>Reaching Everest Base Camp was a dream come true! The journey was challenging yet rewarding, and the stunning mountain views were simply breathtaking. Ocean to Sky Adventures made sure every detail was taken care of, allowing me to fully immerse myself in the experience. </p>
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
                                                <p>This trek was everything I hoped for and more. The sense of accomplishment I felt standing at the base of the world’s highest peak is indescribable. The team was professional and supportive throughout. </p>
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
                                                <p>The trek to Everest Base Camp was tough but so worth it. The views of Everest and the surrounding peaks were out of this world. Our guide was knowledgeable and made the trek safe and enjoyable. </p>
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
                                                    <h5>DAY 2 : Flight to Lukla - Trek Phakding</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>The flight from Kathmandu to Lukla takes 45 minutes and is an
                                                    adventure in itself with great views of the Everest region (from
                                                    the left of the plane) and ending with a hair-raising landing on
                                                    a steep mountain runway. After meeting our crew, we will start
                                                    our trek by heading up the Dudh Koshi Valley on a well- marked
                                                    trail to Phakding.</p>
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
                                                    <h5>DAY 3 : Trek to Namche Bazar</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse3" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingThree" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>From Phakding, we cross and re-cross the river on high suspension
                                                    bridges. Beyond Monjo is the entrance to the Sagarmatha National
                                                    Park, which was set-up to conserve this fragile mountain
                                                    environment. We then ascend steeply to Namche and along the way,
                                                    if the weather permits, catch the first glimpse of Mt Everest.
                                                    Namche Bazaar is the main trading village in Khumbu and has a
                                                    busy Saturday market. It is a meeting place for the Hindu
                                                    traders from the lowlands and Tibetan yak caravans that have
                                                    crossed the glaciated Nangpa La. You can enjoy an Illy coffee
                                                    and amazing brownies here.</p>
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
                                                    <h5>DAY 4 : Acclamotion in Namche</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse4" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingFour" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Namche is tucked away between two ridges and has lots of lodges,
                                                    tea shops and souvenir shops. Today we will trek up to the
                                                    Everest View Hotel at 3880m for our first view of Ama Dablam and
                                                    Mount Everest. Following the ‘walk high, sleep low’ principle,
                                                    this hike will really help with your acclimatisation.</p>
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
                                                    <h5>DAY 5 : Trek to Tengboche</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse5" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>From Namche, the trail contours on to the side of the valley,
                                                    high above the Dudh Koshi. We will get great views of Everest,
                                                    Lhotse, Nuptse and Ama Dablam. Passing by several villages and
                                                    numerous tea shops, we descend steeply to a bridge over the
                                                    river at Phunki Tenga. The village is an ideal stopover for
                                                    lunch. Here we can rest before making the steep climb to
                                                    Tengboche, famous for its legendary monastery, the largest in
                                                    the Khumbu.

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
                                                    <h5>DAY 6 : Trek to Pheriche</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>We descend through a forest, cross the Imja Khola and climb
                                                    steadily to the village of Pangboche. This village is directly
                                                    opposite Ama Dablam (6856m), and has exceptional views of the
                                                    mountain, the gompa, Mani walls and scattered pine trees. A
                                                    further two hours walk brings us to Pheriche.</p>
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
                                                    <h5>DAY 7 : Acclimatisation in Pheriche</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>A day for rest and acclimatisation. We also have an opportunity
                                                    to wander up the valley to look at the Tshola Tsho lake and the
                                                    perpendicular walls of Cholatse and Tawache. Our guide will take
                                                    us up onto the ridge overlooking Dingboche for the view of the
                                                    Imja Valley and the incredible south face of Lhotse.</p>
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
                                                    <h5>DAY 8 : Trek to Lobuche</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>We continue up the wide valley beneath the impressive peaks of
                                                    Cholatse and Tawache on the left. We then turn right and take a
                                                    steep climb towards the foot of the Khumbu Glacier. The tea
                                                    house at Duglha is a good spot to have lunch. The trail zigzags
                                                    up through the boulders of the glacier’s terminal moraine. At
                                                    the top of this climb there are many stone cairns, built as
                                                    memorials to the many Sherpas who have died while climbing Mt
                                                    Everest. The path then climbs gently along the glacier, to
                                                    eventually reach Lobuche.</p>
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
                                                    <h5>DAY 9 : Trek to Everest Camp</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>After breakfast you will start your trek to Base camp which is
                                                    world highest mountain base camp. At Everest Base Camp you can
                                                    see many tents during the spring season of Expedition who comes
                                                    to experience the challenging adventures. It is great place to
                                                    view Khumbu glacier. You spend some time over there and then
                                                    return to Gorak Shep for overnight.</p>
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
                                                    <h4>10</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 10 : Trek to Kala Patthar and stay at Pheriche</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Early in the morning you will heading towards Kala Patthar, from
                                                    where you can see Himalayan sunrise over the Mt. Everest. It is
                                                    the best viewpoint of the Himalayas from very closed and also
                                                    see front side of the Mt. Everest. From Kala Patthar you can see
                                                    panoramic view of Mt. Everest and many other mountain peaks like
                                                    Mt. Pumori, Mt. Lingtren, Mt. Khumertse, Mt. Nuptse, Mt. Lhotse,
                                                    Mt. Ama Dablam, Mt. Thamserku and many more. After a short
                                                    excursion and Photography, you will return back to Gorak Shep.
                                                    After your breakfast and you will trek down to Pheriche.</p>
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
                                                    <h4>11</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 11 : Trek Pheriche to Namche Bazaar</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p> You will start your todays trek from Pheriche to Namche Bazar.
                                                    You will descend through hillside filled with rhododendron
                                                    forest. On the way to Namche, you will see the mountain goats,
                                                    yaks and other wild animals. You will enjoy the view of
                                                    mountains and rocky hills. After crossing many up and down hills
                                                    you can reach the Namche bazar, the village itself is very
                                                    scenic which is surrounded by Himalayas.</p>
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
                                                    <h4>12</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 12 : Trek back to Lukla</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p> You begins your trek to Lukla today, is the last day of your
                                                    adventures. It is mostly downhill trek, you will cross several
                                                    suspension bridge over the way. You have to leave your foot step
                                                    print back to the way and say bye to rocky terrain which you
                                                    trek. After reaching Lukla you will take rest. Today will be
                                                    your last night on the lap of mountains.</p>
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
                                                    <h4>13</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 13 : Fly to Kathmandu</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>This morning we say farewell to Mt Everest and the Khumbu Region.
                                                    You will take again the scenic and adventures flight back to
                                                    either Kathmandu or Manthali Airport.</p>
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
                                                    <h4>14</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 14 : Rest day in Kathmandu</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Today we will take full rest after successfully completing the 13
                                                    long Khumbu Region trekking.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item plans-accordion-single">
                                        <div class="accordion-header" id="planHeadingTwo">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse2" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>15</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 15 : Departure</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Today we will take full rest after successfully completing the 13
                                                    long Khumbu Region trekking.</p>

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
                                            <a href="assets/images/package/Everest base camp.jpeg"
                                                data-fancybox="gallery" data-caption="Caption Here"><img
                                                    src="assets/images/package/Everest base camp.jpeg" alt></a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <a href="assets/images/package/Everest-Gokyo-Lake-1.jpg"
                                                data-fancybox="gallery" data-caption="Caption Here"><img
                                                    src="assets/images/package/Everest-Gokyo-Lake-1.jpg" alt></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel"
                                aria-labelledby="pills-package4">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe id="gmap_canvas"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9509.980771188955!2d86.84174200572151!3d28.001366139404926!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e9ad55ba6370a9%3A0x250e8f50b9a7dcc9!2sEverest%20Base%20Camp%20Trek!5e0!3m2!1sen!2snp!4v1723042450488!5m2!1sen!2snp"
                                            width="600" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a
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
                            <h3 class="widget-lavel">$1285 <span>Per Person</span></h3>
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
