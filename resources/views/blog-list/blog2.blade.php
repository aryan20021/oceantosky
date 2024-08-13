
@extends('layout')

@section('content')
<div class="breadcrumb breadcrumb-style-one">
    <div class="container">
        <div class="col-lg-12 text-center">
            <h2 class="breadcrumb-title">Experience the Thrill of Adventure Sports
                in Pokhara</h2>
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
                            Experience the Thrill of Adventure Sports
                            in Pokhara.
                        </h2>
                        <div class="post-meta">
                            <a href="#" class="blog-writer"><i class="bi bi-person-circle"></i> By sandesh Karki
                            </a>
                            <a href="#" class="blog-comments"><i class="bi bi-calendar3"></i> July 12, 2023</a>
                            <!-- <a href="#" class="blog-comments"><i class="bi bi-chat-left-quote"></i> Comment (08)</a> -->
                        </div>
                    </div>
                    <div class="post-thumb">
                        <img src="assets/images/blog/pokhara.jpeg" alt>
                    </div>
                    <div class="post-body">
                        <p>Nepal is famous for its stunning mountain landscapes and rich cultural heritage, but it’s
                            also a haven for adventure sports enthusiasts. Pokhara, in particular, is a popular
                            destination for adventure sports due to its beautiful lakeside location and proximity to
                            the Annapurna mountain range. Here are some of the best adventure sports you can partake
                            in while visiting Pokhara or Nepal:</p>
                        <div class="blog-quote-box-one d-flex flex-column flex-sm-row">
                            <div class="quote-icon">
                                <img src="assets/images/icons/blogquote.svg" alt>
                            </div>
                            <blockquote>
                                <p>Feel the rush of adrenaline as you push your limits and discover a side of
                                    yourself you never knew existed.</p>
                            </blockquote>
                        </div>
                        <p>Nestled between serene lakes and the towering peaks of the Annapurna range, Pokhara is
                            Nepal’s ultimate playground for adventure enthusiasts. Known for its stunning natural
                            beauty and tranquil atmosphere, this city has also earned a reputation as a hub for some
                            of the most exhilarating adventure sports in the world.</p>
                        <div class="post-innner-image">
                            <img src="assets/images/package/annapurna Circuit-trekking.jpg" alt>
                        </div>
                        <h3 class="sub-title">Things You Can Do to a vibe</h3>
                        <p>
                        <h5>Paragliding</h5>
                        Paragliding is one of the most popular adventure sports in Pokhara, and for good reason. The
                        views of the Annapurna range and Phewa Lake from the air are truly breathtaking, and the
                        adrenaline rush of soaring through the sky is unforgettable.</p>
                        <p>
                        <h5>Bungee Jumping</h5>
                        If you’re looking for a heart-stopping adventure, bungee jumping is a must-try. The bungee
                        jump in Pokhara is one of the highest in the world, with a drop of 160 meters into the gorge
                        of the Bhote Koshi River.</p>
                        <p>
                        <h5>Rafting </h5>
                        Nepal is also home to some of the best white-water rafting in the world, with plenty of
                        options for both beginners and experienced rafters. The Trishuli River, which flows through
                        the scenic middle hills of Nepal, is a popular spot for rafting trips.</p>
                        <p>
                        <h5>Trekking</h5>
                        Trekking is another adventure sport that Nepal is famous for, with a vast network of trails
                        and routes throughout the country. The Annapurna Circuit Trek, which takes you through some
                        of the most stunning mountain landscapes in the world, is a favorite among trekkers.</p>
                        <p>
                        <h5>Mountain Biking</h5>
                        For those who prefer their adventures on two wheels, mountain biking in Nepal is an
                        excellent option. There are plenty of trails to choose from, ranging from easy rides through
                        rural villages to more challenging routes in the mountains.
                        environment</p>
                        <div class="blog-quote-box-two text-center">
                            <div class="quote-icon">
                                <img src="assets/images/icons/blogquote.svg" alt>
                            </div>
                            <blockquote>
                                <p>In Pokhara, the sky is not the limit; it's just the beginning.</p>
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
