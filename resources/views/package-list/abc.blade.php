 @extends('layout')

 @section('content')
 <div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Annapurna Base Camp</h2>
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
                                        <span>12 Days</span>
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
                            <img src="assets/images/package/annapurna-base-camp.jpeg" alt>
                        </div>
                        <div class="header-bottom">
                            <div class="pd-lavel d-flex justify-content-between align-items-center flex-wrap gap-2">
                                <h5 class="location"><i class="bi bi-geo-alt"></i> Annapurna Base Camp Trek,
                                    Kaski</h5>
                                <ul class="d-flex align-items-center rating">
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                    <li><i class="bi bi-star-fill"></i></li>
                                </ul>
                            </div>
                            <h2 class="pd-title">Annapurna Base Camp.</h2>
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
                                <p>One of the best shorter treks we operate, the Annapurna Sanctuary trek is a great
                                    option if you do not have sufficient time available for the acclimatisation
                                    required on one of our longer treks.
                                    <br>
                                    The trek begins with a 30 minute flight from Kathmandu to the lakeside city of
                                    Pokhara, followed by a one hour drive to the trailhead at Nayapul. A steep
                                    ascent takes you to the village of Ghorepani, ready to make your ascent of Poon
                                    Hill for amazing views of Dhaulagiri, Machhapuchhre, Nilgiri, and the Annapurna
                                    range. From here you trek for several days following the gorge carved by the
                                    river, crossing and re-crossing on suspension bridges before reaching
                                    Machhapuchhre Base Camp and Annapurna Base Camp. This section of the Annapurna
                                    range forms an amphitheatre containing Annapurna I, Fang, Gangapurna, Glacier
                                    Dome, Hiunchuli and Machhapuchhre. With so many surrounding mountains, sunlight
                                    is restricted to just 7 hours a day in summer. The only entrance to the
                                    Sanctuary is a narrow pass between Hiunchuli and Machhapuchhre. The peak of
                                    Machhapuchhre is thought to be the dwelling place of the Hindu god Shiva. The
                                    sanctuary was not entered by outsiders until 1956, and only recently was the
                                    bringing of eggs or meat or the admission of women and Dalits – untouchables –
                                    permitted.
                                    <br>
                                    After the trek, there is the opportunity to relax on the shores of Lake Pokhara
                                    before flying back to Kathmandu.
                                </p>
                                <div class="p-info-featured-img row position-relative g-4 row-cols-1 row-cols-sm-2">
                                    <div class="col">
                                        <div class="featured-img">
                                            <img src="assets/images/package/annapurna-base-camp.jpeg"
                                                alt>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="featured-img">
                                            <img src="assets/images/package/annpurna-circuit-trek.jpg" alt>
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
                                            <td>Annapurna Base Camp</td>
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
                                                <p>Reaching Annapurna Base Camp felt like stepping into another world. The trek was demanding but rewarding, and the scenery along the way was breathtaking. I can't wait to do it again! </p>
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
                                                <p>The Annapurna Base Camp trek was a perfect mix of challenge and beauty. The sunrise at the base camp was magical, and the entire journey was well-organized by Ocean to Sky Adventures. </p>
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
                                                <p>Trekking to Annapurna Base Camp was an experience I'll never forget. The views of Annapurna and Machapuchare were stunning, and the feeling of being surrounded by such majestic peaks was awe-inspiring. </p>
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
                                                    <h5>DAY 2 : Fly To Pokhara, Drive Nayapul, Trek To Tikhedunga
                                                    </h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>We will take a morning flight to Pokhara, with magnificent views
                                                    of Dhaulagiri, Manaslu, Machhapuchhre, the five peaks of
                                                    Annapurna and many others. We will then drive for one hour to
                                                    Nayapul where we start our trek. We follow the south bank of the
                                                    river, passing through sub-tropical valley forests and crossing
                                                    the Modi Khola on a high suspension bridge. We continue to
                                                    ascend on this trail until we reach the village of Tikhedhunga
                                                    where we will spend the night.</p>
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
                                                    <h5>DAY 3 : Trek to Ghorepani</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse3" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingThree" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>We leave the small village of Thikedhungga, crossing the small
                                                    suspension bridge across the deep gorge to start your steep
                                                    ascent up to Ulleri. Fortunately there are steps all the way
                                                    which makes this tough climb slightly easier. After Ulleri, the
                                                    trail continues winding its way through the rhododendron
                                                    forests, passing beautiful waterfalls and we climb up, and down
                                                    a little, enjoying the views of Machhapuchhre (Fish Tail)
                                                    peeking out high above the lush green hillsides. Eventually we
                                                    reach the village of Ghorepani and are rewarded with
                                                    breath-taking views of Dhaulagiri and the Annapurna range.</p>
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
                                                    <h5>DAY 4 : Ascend Poon Hill Trek To Tadapani</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse4" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingFour" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>We will set off in the dark this morning to ascend Poon Hill,
                                                    renowned as one of the best view points in Nepal. The trail
                                                    climbing to Poon Hill’s viewpoint is steep, but it is well
                                                    rewarded with spectacular views of Machhapuchhre, Dhaulagiri,
                                                    Nilgiri, and the Annapurnas as the sun rises. We then begin our
                                                    descent down to Tadapani through rhododendron forests with
                                                    beautiful views of the high mountains and lush green valleys.
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
                                        <div class="accordion-header" id="planHeadingFive">
                                            <div class="accordion-button collapsed" data-bs-toggle="collapse"
                                                data-bs-target="#planCollapse5" aria-expanded="true"
                                                role="navigation">
                                                <div class="paln-index-circle">
                                                    <h4>05</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 5 : Trek to Chomrong</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse5" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingFive" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>We will trek down through the village of Chuile and then descend
                                                    to Lower Chomrong, before climbing the thousand stony steps
                                                    taking us to Upper Chomrong.

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
                                                    <h5>DAY 6 : Trek to Bamboo</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>The trail from Chomrong descends to cross the Chomrong Khola,
                                                    before ascending out of the valley through rhododendron forests
                                                    and bamboo thickets. In a clearing in the forest is the village
                                                    of Bamboo.</p>
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
                                                    <h5>DAY 7 : Trek To Machhapuchhre Base Camp</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Today we start our trek to Machhapuchhre Base Camp (MBC). This is
                                                    quite a strenuous hike but well worth the effort as the
                                                    spectacular view of Machhapuchchhre unfolds before you. Passing
                                                    between the heights of Hiunchuli and Machhapuchhre, we reach
                                                    Machhapuchhre Base Camp, where we spend the night.</p>
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
                                                    <h5>DAY 8 : Trek to Annapurna Base Camp, Descend To Himalaya
                                                    </h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>On the way to Annapurna Base Camp from Machhapuchhre Base Camp,
                                                    the vegetation disappears and we will be trekking amongst
                                                    glacial moraine. Our first view will be of Annapurna’s near
                                                    vertical south face towering above you. Annapurna Base Camp
                                                    boasts one of the most awe inspiring 360° views in the Himalaya.
                                                    We will literally be surrounded by the peaks such as
                                                    Machhapuchhre, Annapurna South, Annapurna IV and Hiunchuli
                                                    <br>
                                                    We then descend from Annapurna Base Camp to Himalaya retracing
                                                    our steps through Machhapuchhre Base Camp. Heading back down to
                                                    the valley is much easier than climbing up! We will see the
                                                    waterfalls that drop down from a high point to the rocks below.

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
                                                    <h4>09</h4>
                                                </div>
                                                <div class="plan-title">
                                                    <h5>DAY 9 : Trek to Jhindu Danda Hot Spring</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>From Himalaya, we start our trek to Jhinu Danda today. We will
                                                    walk passing back through the ups and downs stone staircases of
                                                    Chhomrong. From Chhomrong, we will continue to descent to Jhinu
                                                    Danda. In same day, we will have an opportunity to enjoy natural
                                                    hot springs lying just a 15-min walk from Jhinu Danda.</p>
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
                                                    <h5>DAY 10 : Trek to Nayapul And Drive To Pokhara</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Today we start our trek from Jhinu danda to Nayapul. We will
                                                    steep down to Nayapul by leaving all the peaceful villages,
                                                    local peoples, terrain, glacier and glorious mountain view. Once
                                                    we reach to Nayapul, we will say good bye to Annapurna Range and
                                                    drive towards Pokhara.</p>
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
                                                    <h5>DAY 11 : Refresh In Pokhara And Fly To Kathmandu</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p> In morning, we will enjoy the sightseeing at Pokhara and we will
                                                    back to Kathmandu by taking flight. Rest in Kathmandu.</p>
                                                
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
                                                    <h5>DAY 12 : Departure</h5>
                                                    <h6>8.00 AM to 8.00 PM</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="planCollapse2" class="accordion-collapse collapse"
                                            aria-labelledby="planHeadingTwo" data-bs-parent="#planAccordion">
                                            <div class="accordion-body plan-info">
                                                <p>Finally, its time to say goodbye to you for this trip to Nepal. I
                                                    hope you will enjoy your trip. We will waiting for you to next
                                                    expeditions. After breakfast, our representative will take you
                                                    to Tribhuvan International Airport in time for your onward
                                                    flight to your destination.</p>

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
                                            <a href="assets/images/package/annapurna-base-camp.jpeg"
                                                data-fancybox="gallery" data-caption="Caption Here"><img
                                                    src="assets/images/package/annapurna-base-camp.jpeg" alt></a>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="package-gallary-item">
                                            <a href="assets/images/package/annpurna-circuit-trek.jpg"
                                                data-fancybox="gallery" data-caption="Caption Here"><img
                                                    src="assets/images/package/annpurna-circuit-trek.jpg" alt></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade package-location-tab mt-3" id="pill-body4" role="tabpanel"
                                aria-labelledby="pills-package4">
                                <div class="mapouter">
                                    <div class="gmap_canvas">
                                        <iframe id="gmap_canvas"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112174.25969903365!2d83.8627159544178!3d28.526322755194332!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995f588b6a4922d%3A0xbaf344120520a16c!2sAnnapurna%20Sanctuary!5e0!3m2!1sen!2snp!4v1723191695148!5m2!1sen!2snp"
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
                            <h3 class="widget-lavel">$870 <span>Per Person</span></h3>
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
 {{-- comment --}}


 @endsection
