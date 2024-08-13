@extends('layout')

@section('content')

<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Exploring the Wildlife of Chitwan National Park</h2>
            <ul class="d-flex justify-content-center breadcrumb-items">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Blog Details</li>
            </ul>
        </div>
    </div>
</div>

<div class="blog-details-wrapper pt-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details">
                    <div class="post-header">
                        <h2 class="post-title">
                            Exploring the Wildlife of Chitwan National Park
                        </h2>
                        <div class="post-meta">
                            <a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By Bibek Chhetri
                            </a>
                            <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> Novembar 16, 2023</a>
                            <!-- <a href="#" class="blog-comments"><i class="bi bi-chat-left-quote"></i> Comment (08)</a> -->
                        </div>
                    </div>
                    <div class="post-thumb">
                        <img src="assets/images/blog/Chitwan.jpg" alt>
                    </div>
                    <div class="post-body">
                        <p>Chitwan National Park is one of Nepal’s most popular destinations for wildlife
                            enthusiasts and nature lovers. Located in the southern part of the country, the park is
                            home to a diverse array of flora and fauna, including Bengal tigers, one-horned
                            rhinoceroses, and more than 500 species of birds. Here’s a guide to exploring the
                            wildlife of Chitwan National Park:</p>
                        <div class="blog-quote-box-one d-flex flex-column flex-sm-row">
                            <div class="quote-icon">
                                <img src="assets/images/icons/blogquote.svg" alt>
                            </div>
                            <blockquote>
                                <p>In the heart of Chitwan, nature reveals its most majestic secrets, offering a
                                    sanctuary for both wildlife and those who seek to witness its splendor.</p>
                            </blockquote>
                        </div>
                        <p>Tucked away in the lush lowlands of Nepal, Chitwan National Park is a treasure trove of
                            biodiversity and natural beauty. This UNESCO World Heritage Site offers visitors a rare
                            glimpse into the untamed wilderness that is home to some of the world's most magnificent
                            creatures. From the elusive Bengal tiger to the one-horned rhinoceros, Chitwan is a
                            haven for wildlife enthusiasts and nature lovers alike.</p>
                        <div class="post-innner-image">
                            <img src="assets/images/destination/ChitwanNationalPark.jpg" alt>
                        </div>
                        <h3 class="sub-title">Things You Can Do to a vibe</h3>
                        <p>
                        <h5>Take a Jungle Safari
                        </h5>
                        One of the best ways to explore the wildlife of Chitwan National Park is by taking a jungle
                        safari. These safaris are usually conducted on elephant back, which allows you to get up
                        close and personal with the wildlife. You can also take a jeep safari or a walking safari
                        for a different perspective.</p>
                        <P>
                        <h5>Spot the One-Horned Rhinoceros</h5>
                        The one-horned rhinoceros is one of the star attractions of Chitwan National Park, and it’s
                        one of the best places in the world to see them in the wild. These magnificent creatures can
                        weigh up to 2,000 kg and are easily identifiable by their distinctive single horn.</p>
                        <P>
                        <h5>Look for the Bengal Tiger </h5>
                        Chitwan National Park is also home to the Bengal tiger, one of the most majestic creatures
                        in the world. While they can be difficult to spot, your guide will help you look for signs
                        of their presence, such as paw prints or scratches on trees.</p>
                        <P>
                        <h5>Discover the Park’s Birdlife</h5>
                        Chitwan National Park is a birdwatcher’s paradise, with more than 500 species of birds
                        recorded in the park. From the colorful Himalayan pheasant to the majestic Brahminy kite,
                        there’s plenty to see for bird enthusiasts.</p>
                        <P>
                        <h5>Learn About Local Culture</h5>
                        In addition to the incredible wildlife, Chitwan National Park is also home to several ethnic
                        communities, such as the Tharu people. You can learn about their unique culture and
                        traditions by visiting a local Tharu village or museum.</p>
                        <div class="blog-quote-box-two text-center">
                            <div class="quote-icon">
                                <img src="assets/images/icons/blogquote.svg" alt>
                            </div>
                            <blockquote>
                                <p>Chitwan is not just a park; it's a window into the wild, where the call of the
                                    jungle echoes through the soul of every visitor</p>
                            </blockquote>
                        </div>

                    </div>
                    
                </div>

                <form action="#" id="comment_form" method="post">
                    <div class="comment-form mt-110">
                        <h4>Leave Your Comment</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="custom-input-group">
                                    <input type="text" placeholder="Your Full Name" id="name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="custom-input-group">
                                    <input type="text" placeholder="Your Email" id="email">
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
            <div class="col-lg-4">
                <div class="blog-sidebar ">
                    <aside class="blog-widget widget-search">
                        <div class="widget-title">
                            <h4>Search Here</h4>
                        </div>
                        <div class="widget-body">
                            <form action="#" method="post" id="blog-sidebar-search">
                                <div class="search-input-group">
                                    <input type="search" placeholder="Your Destination">
                                    <button type="submit">SEAECH</button>
                                </div>
                            </form>
                        </div>
                    </aside>
                    <aside class="blog-widget widget-categories mt-30">
                        <div class="widget-title">
                            <h4>Categories</h4>
                        </div>
                        <ul class="widget-body">
                            <!-- <li><a href="#">
                                    <h6><i class="bi bi-chevron-double-right"></i> New York City</h6>
                                    <span>(20)</span>
                                </a></li> -->
                            <li><a href="#">
                                    <h6><i class="bi bi-chevron-double-right"></i> Adventure Tour</h6>
                                    <span>(08)</span>
                                </a></li>
                            <li><a href="#">
                                    <h6><i class="bi bi-chevron-double-right"></i> Couple Tour</h6>
                                    <span>(18)</span>
                                </a></li>
                            <li><a href="#">
                                    <h6><i class="bi bi-chevron-double-right"></i> Village Tour</h6>
                                    <span>(21)</span>
                                </a></li>
                            <li><a href="#">
                                    <h6><i class="bi bi-chevron-double-right"></i> Group Tour</h6> <span>(09)</span>
                                </a></li>
                        </ul>
                    </aside>
                    <aside class="blog-widget widget-recent-entries-custom mt-30">
                        <div class="widget-title">
                            <h4>New Post</h4>
                        </div>
                        <ul class="widget-body">
                            <li class="clearfix">
                                <div class="wi"><a href="blog-details2.html"><img
                                            src="assets/images/blog/pokhara.jpeg" alt></a></div>
                                <div class="wb">
                                    <h6><a href="blog-details2.html">Experience the Thrill of Adventure Sports
                                            in Pokhara</a></h6>

                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="wi"><a href="blog-details1.html"><img
                                            src="assets/images/blog/Everest base camp2.jpeg" alt></a></div>
                                <div class="wb">
                                    <h6><a href="blog-details1.html">Hiking in the Himalayas: A Beginner’s
                                            Guide.</a></h6>

                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="wi"><a href="blog-details1.html"><img
                                            src="assets/images/blog/idol_1721331i.jpg" alt></a></div>
                                <div class="wb">
                                    <h6><a href="blog-details1.html">Discovering Nepal’s Rich Culture and
                                            Heritage</a></h6>

                                </div>
                            </li>
                            <li class="clearfix">
                                <div class="wi"><a href="blog-details1.html"><img
                                            src="assets/images/blog/Chitwan.jpg" alt></a></div>
                                <div class="wb">
                                    <h6><a href="blog-details1.html">Exploring the Wildlife of Chitwan National
                                            Park</a></h6>

                                </div>
                            </li>
                        </ul>
                    </aside>
                    <aside class="blog-widget widget-tag-cloud mt-30">
                        <div class="widget-title">
                            <h4>Tags</h4>
                        </div>
                        <div class="tag-cloud widget-body">
                            <a href="#">Adventure</a>
                            <a href="#">Trip</a>
                            <a href="#">Guided</a>
                            <a href="#">Historical</a>
                            <a href="#">Road Trips</a>
                            <a href="#">Tourist</a>
                        </div>
                    </aside>
                    <aside class="blog-widget widget-gallary mt-30">
                        <div class="widget-title">
                            <h4>Gallery</h4>
                        </div>
                        <ul class=" widget-body">
                            <li>
                                <a href="assets/images/package/annapurna Circuit-trekking.jpg" data-fancybox="gallery"
                                    data-caption="Caption Here" class="gallary-overlay">
                                    <img src="assets/images/package/annapurna Circuit-trekking.jpg" alt>
                                </a>
                            </li>
                            <li>
                                <a href="assets/images/package/Dhaulagiri.jpg" data-fancybox="gallery"
                                    data-caption="Caption Here" class="gallary-overlay">
                                    <img src="assets/images/package/Dhaulagiri.jpg" alt>
                                </a>
                            </li>
                            <li>
                                <a href="assets/images/package/Chitwan.jpg" data-fancybox="gallery"
                                    data-caption="Caption Here" class="gallary-overlay">
                                    <img src="assets/images/package/Chitwan.jpg" alt>
                                </a>
                            </li>
                            <li>
                                <a href="assets/images/package/Nar pur valley .jpg" data-fancybox="gallery"
                                    data-caption="Caption Here" class="gallary-overlay">
                                    <img src="assets/images/package/Nar pur valley .jpg" alt>
                                </a>
                            </li>
                            <li>
                                <a href="assets/images/package/Everest base camp.jpeg" data-fancybox="gallery"
                                    data-caption="Caption Here" class="gallary-overlay">
                                    <img src="assets/images/package/Everest base camp.jpeg" alt>
                                </a>
                            </li>
                            <li>
                                <a href="assets/images/package/Lumbini.jpeg" data-fancybox="gallery"
                                    data-caption="Caption Here" class="gallary-overlay">
                                    <img src="assets/images/package/Lumbini.jpeg" alt>
                                </a>
                            </li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
