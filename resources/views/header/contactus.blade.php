@extends('layout')

@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active">Contact Us</li>
            </ul>
        </div>
    </div>
</div>


<div class="contact-wrapper pt-100">
    <div class="container">
        <div class="row align-items-center justify-content-lg-center gy-5">
            <div class="col-lg-6">
                <div class="contatc-intro-figure">
                    <img src="assets/images/banner/contact-bg.png" alt class="img-fluid">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-info">
                    <h3>Contact Info.</h3>
                    <ul>
                        <li>
                            <h6>Let's Talk</h6>
                            <i class="bi bi-envelope-open"></i><a
                                href="mailto:info@oceantoskyadventures.com">info@oceantoskyadventures.com</a>
                        </li>
                        <li>
                            <h6>Loacation.</h6>
                            <a href="#">Utardhoka Gairidhara, Kathmandu, Nepal</a>
                        </li>
                        <li>
                            <h6>Visit Us.</h6>
                            <a href="#">Facebook: https://www.facebook.com/oceantoskyadventures</a>
                            <a href="#">Twitter: https://www.twitter.com/oceantoskyadventures</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-0">
        <div class="contact-map mt-120">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe id="gmap_canvas"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.9975955467266!2d85.32086768361003!3d27.71736051475054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb18fd7adcf4f5%3A0xe38f7e3d4a606ec3!2sOcean%20to%20Sky%20Adventure%20Pvt%20Ltd!5e0!3m2!1sen!2snp!4v1722940866686!5m2!1sen!2snp"
                        width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- <a href="https://123movies-to.org/"></a> -->
                    <br>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-120">
        <form action="#" id="contact_form">
            <div class="contact-form-wrap">
                <h4>Get a free Keystroke quote now</h4>
                <p>Your email address will not be published. Required fields are marked *</p>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="custom-input-group">
                            <label for="name">Name</label>
                            <input type="text" placeholder="Your name" id="name">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="custom-input-group">
                            <label for="email">Email</label>
                            <input type="text" placeholder="Your Email" id="email">
                        </div>
                    </div>
                </div>
                <div class="custom-input-group">
                    <textarea cols="20" rows="7" placeholder="Your message"></textarea>
                </div>
                <div class="custom-input-group">
                    <div class="submite-btn">
                        <button type="submit">Send Message</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
