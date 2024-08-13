@extends('layout')

@section('content')

<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">FAQ</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">FAQ</li>
            </ul>
        </div>
    </div>
</div>

<div class="faq-wrapper pt-76">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="faqs mt-30">
                    <h2>Frequently <span>Asked </span><br>
                        Question</h2>
                    <div class="accordion faq-accordion accordion-flush" id="faq-accordion-example">
                        <div class="accordion-item faq-accordion">
                            <h2 class="accordion-header" id="faq-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-collapseOne" aria-expanded="false"
                                    aria-controls="faq-collapseOne">
                                    1. What is included in a trekking package with Ocean to Sky Adventures?
                                </button>
                            </h2>
                            <div id="faq-collapseOne" class="accordion-collapse collapse  show"
                                aria-labelledby="faq-headingOne" data-bs-parent="#faq-accordion-example">
                                <div class="accordion-body">
                                    <p>Our trekking packages typically include transportation, accommodations,
                                        meals, permits, experienced guides, and support staff. Detailed itineraries
                                        will outline what is specifically included for each trek. If you have any
                                        special requests or requirements, please let us know!</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item faq-accordion">
                            <h2 class="accordion-header" id="faq-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-collapseTwo" aria-expanded="false"
                                    aria-controls="faq-collapseTwo">
                                    2. How do I prepare for a trekking adventure?
                                </button>
                            </h2>
                            <div id="faq-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="faq-headingTwo" data-bs-parent="#faq-accordion-example">
                                <div class="accordion-body">
                                    <p>Preparation is key to a successful trek. We recommend getting in good
                                        physical condition through regular exercise, especially cardiovascular and
                                        strength training. Familiarize yourself with the trek's altitude and
                                        terrain, and ensure you have the appropriate gear. We provide a detailed
                                        packing list and pre-trek advice to help you prepare.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item faq-accordion">
                            <h2 class="accordion-header" id="faq-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-collapseThree" aria-expanded="false"
                                    aria-controls="faq-collapseThree">
                                    3. What should I do if I have a medical condition or special needs?
                                </button>
                            </h2>
                            <div id="faq-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="faq-headingThree" data-bs-parent="#faq-accordion-example">
                                <div class="accordion-body">
                                    <p>Please inform us of any medical conditions or special needs when booking your
                                        trek. Our team will work with you to ensure we can accommodate your needs
                                        and provide appropriate support. Consult your doctor before embarking on any
                                        trek, especially if you have pre-existing health concerns.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item faq-accordion">
                            <h2 class="accordion-header" id="faq-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-collapseFour" aria-expanded="false"
                                    aria-controls="faq-collapseFour">
                                    4. Are the treks suitable for beginners?
                                </button>
                            </h2>
                            <div id="faq-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="faq-headingFour" data-bs-parent="#faq-accordion-example">
                                <div class="accordion-body">
                                    <p>Many of our treks are suitable for beginners, though some routes are more
                                        challenging than others. We offer various treks with different difficulty
                                        levels, so you can choose one that matches your experience and fitness
                                        level. Our team can help you select the best trek based on your preferences
                                        and experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item faq-accordion">
                            <h2 class="accordion-header" id="faq-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faq-collapseFive" aria-expanded="false"
                                    aria-controls="faq-collapseFive">
                                    5. What is the cancellation policy?
                                </button>
                            </h2>
                            <div id="faq-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="faq-headingFive" data-bs-parent="#faq-accordion-example">
                                <div class="accordion-body">
                                    <p>Our cancellation policy varies depending on the trek and timing of the
                                        cancellation. Generally, cancellations made well in advance may incur a
                                        smaller fee, while last-minute cancellations may have higher charges. Please
                                         contact us for specific
                                        information related to your cancellation and booking.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="faq-sidebar mt-30">
                    <div class="faq-topics">
                        <h3>FAQ Topic</h3>
                        <div class="radio-group">
                            <input class="form-check-input" type="radio" name="radioGroup" id="radioGroup1">
                            <label class="form-check-label" for="radioGroup1">
                                General Question
                            </label>
                        </div>
                        <div class="radio-group">
                            <input class="form-check-input" type="radio" name="radioGroup" id="radioGroup2" checked>
                            <label class="form-check-label" for="radioGroup2">
                                Financial Topic
                            </label>
                        </div>
                        <div class="radio-group">
                            <input class="form-check-input" type="radio" name="radioGroup" id="radioGroup3" checked>
                            <label class="form-check-label" for="radioGroup3">
                                Privacy Policy
                            </label>
                        </div>
                        <div class="radio-group">
                            <input class="form-check-input" type="radio" name="radioGroup" id="radioGroup4" checked>
                            <label class="form-check-label" for="radioGroup4">
                                Other Questions
                            </label>
                        </div>
                    </div>
                    <form action="#" id="faq-form" method="post">
                        <div class="faq-form">
                            <h3>Ask Your Question</h3>
                            <div class="custom-input-group">
                                <input type="text" placeholder="Your Name" id="name">
                            </div>
                            <div class="custom-input-group">
                                <input type="text" placeholder="Your Email" id="email">
                            </div>
                            <div class="custom-input-group">
                                <input type="tel" placeholder="Phone Number" id="phone">
                            </div>
                            <div class="custom-input-group">
                                <textarea cols="20" rows="6" placeholder="Your message"></textarea>
                            </div>
                            <div class="custom-input-group">
                                <div class="submite-btn">
                                    <button type="submit">Submit Now</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
