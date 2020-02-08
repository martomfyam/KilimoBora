<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title -->
    <title>{{ config('app.name', 'Kilimo Bora') }}</title>
    <!-- Favicon -->
    <link rel="icon" href="img/kilimoboralogo.jpg">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/classy-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>

<body>
<!-- Preloader -->
<!-- <div class="preloader d-flex align-items-center justify-content-center">
  <div class="spinner"></div>
</div> -->

<!-- ##### Header Area Start ##### -->
<header class="header-area">
    <!-- Top Header Area -->

    <!-- Global Navigation -->
    @include('partials.navbar')

</header>
<!-- ##### Header Area End ##### -->

<!-- ##### Hero Area Start ##### -->
<div class="hero-area">
    <div class="welcome-slides owl-carousel">

        <!-- Single Welcome Slides -->
        <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-10">
                        <div class="welcome-content">
                            <h2 data-animation="fadeInUp" data-delay="200ms">The hearth of the farm is the true center
                                of our universe.</h2>
                            <p data-animation="fadeInDown" data-delay="400ms">Empowered agricultural Value Chains
                                through access to innovation and technology dissemination.</p>
                            <a href="#" class="btn famie-btn mt-4" data-animation="bounceInUp" data-delay="600ms">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Welcome Slides -->
        <div class="single-welcome-slides bg-img bg-overlay jarallax" style="background-image: url(img/bg-img/7.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 col-lg-10">
                        <div class="welcome-content">
                            <h2 data-animation="fadeInDown" data-delay="200ms">The hearth of the farm is the true center
                                of our universe.</h2>
                            <p data-animation="fadeInDown" data-delay="400ms">Empowered agricultural Value Chains
                                through access to innovation and technology dissemination.</p>
                            <a href="#" class="btn famie-btn mt-4" data-animation="bounceInDown" data-delay="600ms">Contact
                                Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- ##### Hero Area End ##### -->

<!-- ##### Famie Benefits Area Start ##### -->

<!-- ##### Famie Benefits Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<section class="famie-blog-area">
    <div class="container">
        <div class="row">
            <!-- Posts Area -->
            <div class="col-12 col-md-8">
                <div class="posts-area">

                    <!-- Single Blog Post Area -->
                    <div class="single-blog-post-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <h6>Post on <a href="#" class="post-date">18 Aug 2018</a> / <a href="#" class="post-author">Peter
                                Crough</a></h6>
                        <a href="#" class="post-title">Rising cattle supplies see beef export lifted</a>
                        <div class="row">
                            <div class="col-6">
                                <img src="img/bg-img/26.jpg" alt="" class="post-thumb">
                            </div>
                            <div class="col-6">
                                <p class="post-excerpt">
                                    Nunc aliquet, justo non commodo conguet, denim, action bibendum purus selecao samuel
                                    eget libero. Maecenas ac viverra enim, et laoreet lacus. Etiam nisi diam, sagittis
                                    quam at...
                                </p>
                                <h5 style="margin-top: 5px;">Featured events...</h5>
                            </div>
                        </div>
                    </div>

                    <!-- ##### About Us Area Start ##### -->
                    <section class="about-us-area">
                        <div class="container">
                            <div class="row align-items-center">

                                <!-- About Us Content -->
                                <div class="col-12 col-md-8">
                                    <div class="about-us-content mb-100">
                                        <!-- Section Heading -->
                                        <div class="section-heading">
                                            <p>About us</p>
                                            <h2><span>Let Us</span> Tell You Our Story</h2>
                                            <img src="img/core-img/decor.png" alt="">
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit,
                                            pretium atlanta urna veloci, fermentum malesuda mina. Donec auctor nislec
                                            neque sagittis, sit amet dapibus pellentesque donal feugiat. Nulla mollis
                                            magna non
                                            sanaliquet, volutpat do zutum, ultrices consectetur, ultrices at purus.</p>
                                        <a href="#" class="btn famie-btn mt-30">Read More</a>
                                    </div>
                                </div>

                                <!-- Famie Video Play -->
                                <div class="col-12 col-md-4">
                                    <div class="famie-video-play mb-100">
                                        <img src="img/bg-img/6.jpg" alt="">
                                        <!-- Play Icon -->
                                        <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i
                                                class="fa fa-play"></i></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <!-- ##### About Us Area End ##### -->


                </div>

                <!-- pagination starts here -->

                <!-- pagination ends here -->
            </div>

            <!-- Sidebar Area -->
            <div class="col-12 col-md-4">
                <div class="sidebar-area">

                    <!-- Single Widget Area -->
                    <a href="#" class="icon fab fa-facebook"></a>
                    <a href="#" class="icon fab fa-twitter"></a>
                    <a href="#" class="icon fab fa-google"></a>
                    <a href="#" class="icon fab fa-youtube"></a>
                    <a href="#" class="icon fa fa-envelope"></a>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area">
                        <!-- Title -->
                        <h5 class="widget-title">Events</h5>
                        <!-- Cata List -->
                        <ul class="cata-list">
                            <li><a href="#">Recipe Collections</a></li>
                            <li><a href="#">The advantage of knowledge</a></li>
                            <li><a href="#">Organic Farming</a></li>
                            <li><a href="#">Farming &amp; Agricultural</a></li>
                            <li><a href="#">Special Diet</a></li>
                            <li><a href="#">How to Manage Soil Fertility</a></li>
                        </ul>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area">
                        <!-- Title -->
                        <h5 class="widget-title">Recent News</h5>

                        <!-- Single Recent News Start -->
                        <div class="single-recent-blog style-2 d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/30.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">US milk production continues its upward trajectory for
                                    2018</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>

                        <!-- Single Recent News Start -->
                        <div class="single-recent-blog style-2 d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/31.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">USDA'S crop ratings more ahead for corn, drop for
                                    soybeans</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>

                        <!-- Single Recent News Start -->
                        <div class="single-recent-blog style-2 d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/32.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">Auction report: Bids aplenty for massive John Deere
                                    collection</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>

                        <!-- Single Recent News Start -->
                        <div class="single-recent-blog style-2 d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/33.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">Wool prices expected to remain competitive as demand is
                                    grow</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>
                    </div>

                    <!-- Single Widget Area -->
                    <div class="single-widget-area">
                        <!-- Title -->
                        <h5 class="widget-title">Tags</h5>
                        <!-- Tags -->
                        <ul class="famie-tags">
                            <li><a href="#">All product</a></li>
                            <li><a href="#">Freshy Fruit</a></li>
                            <li><a href="#">Sweet Corn</a></li>
                            <li><a href="#">Chicken</a></li>
                            <li><a href="#">Organic</a></li>
                            <li><a href="#">Farm Practices</a></li>
                            <li><a href="#">Meat</a></li>
                            <li><a href="#">Special Recipe</a></li>
                        </ul>
                    </div>

                    <!-- Single Widget Area -->


                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->


<!-- ##### About Us Area Start ##### -->
<section class="about-us-area">
    <div class="container">
        <div class="row align-items-center">

            <!-- About Us Content -->
            <div class="col-12 col-md-8">
                <div class="about-us-content mb-100">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <p>About us</p>
                        <h2><span>Let Us</span> Tell You Our Story</h2>
                        <img src="img/core-img/decor.png" alt="">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetu adipiscing elit. Etiam nunc elit, pretium atlanta urna
                        veloci, fermentum malesuda mina. Donec auctor nislec neque sagittis, sit amet dapibus
                        pellentesque donal feugiat. Nulla mollis magna non
                        sanaliquet, volutpat do zutum, ultrices consectetur, ultrices at purus.</p>
                    <a href="#" class="btn famie-btn mt-30">Read More</a>
                </div>
            </div>

            <!-- Famie Video Play -->
            <div class="col-12 col-md-4">
                <div class="famie-video-play mb-100">
                    <img src="img/bg-img/6.jpg" alt="">
                    <!-- Play Icon -->
                    <a href="http://www.youtube.com/watch?v=7HKoqNJtMTQ" class="play-icon"><i
                            class="fa fa-play"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- ##### Services Area Start ##### -->
<section class="services-area d-flex flex-wrap">
    <!-- Service Thumbnail -->
    <div class="services-thumbnail bg-img jarallax" style="background-image: url('img/bg-img/7.jpg');"></div>

    <!-- Service Content -->
    <div class="services-content section-padding-100-50 px-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <p>What we do</p>
                        <h2><span>Our Products</span></h2>
                        <img src="img/core-img/decor.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mb-50">
                    <p>Mauris fermentum nunc quis massa lacinia consequat. Suspendisse orci magna, pharetra sedonia
                        risus ut,
                        elementum mollis nisin. Nunc in sapien turpis. Donec egeto david orci pulvinar ultrices necto
                        drax turpis.
                        Pellentesque justo metus, semper nec ullamcorper id, gravida ultricies arcu.</p>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Service Title -->
                        <div class="service-title mb-3 d-flex align-items-center">
                            <img src="img/core-img/s1.png" alt="">
                            <h5>Fruit &amp; Vegetable</h5>
                        </div>
                        <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo aliquam
                            manta legolas. </p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="300ms">
                        <!-- Service Title -->
                        <div class="service-title mb-3 d-flex align-items-center">
                            <img src="img/core-img/s2.png" alt="">
                            <h5>Meat &amp; Eggs</h5>
                        </div>
                        <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo aliquam
                            manta legolas. </p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Service Title -->
                        <div class="service-title mb-3 d-flex align-items-center">
                            <img src="img/core-img/s3.png" alt="">
                            <h5>Milk &amp; Cheese</h5>
                        </div>
                        <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo aliquam
                            manta legolas. </p>
                    </div>
                </div>

                <!-- Single Service Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-service-area mb-50 wow fadeInUp" data-wow-delay="700ms">
                        <!-- Service Title -->
                        <div class="service-title mb-3 d-flex align-items-center">
                            <img src="img/core-img/s4.png" alt="">
                            <h5>Rice &amp; Corn</h5>
                        </div>
                        <p>Intiam eu sagittis est, aster cosmo lacini libero. Praesent dignissim sed odio velo aliquam
                            manta legolas. </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- ##### Services Area End ##### -->

<!-- ##### Our patners area Start ##### -->
<div class="container-fluid" style="border-style: outset; ">
    <div class="row">
        <div class="col-12" style="margin-left: 15%; margin-top: 20px;">
            <div class="section-heading">
                <p>OUR</p>
                <h2><span>Partners</span></h2>
                <img src="img/core-img/decor.png" alt="">
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-3 col-md-6" style=" margin-bottom: 80px;">
            <a href="#" class="fa fa-angle-double-left"></a>
            <img src="img/kilimoboralogo.jpg" alt="">

        </div>
        <div class="col-lg-3 col-md-6" style=" margin-bottom: 80px;">
            <img src="img/kilimoboralogo.jpg" alt="">

        </div>
        <div class="col-lg-3 col-md-6" style=" margin-bottom: 80px;">
            <img src="img/kilimoboralogo.jpg" alt="">

        </div>
        <div class="col-lg-3 col-md-6" style=" margin-bottom: 80px;">
            <img src="img/kilimoboralogo.jpg" alt="">
            <a href="#" class="fa fa-angle-double-right"></a>
        </div>

    </div>
</div>
</div>
<!-- ##### Our Patners Area End ##### -->


<!-- ##### Farming Practice Area Start ##### -->

<!-- ##### Farming Practice Area End ##### -->

<!-- ##### Testimonial Area Start ##### -->
<section class="testimonial-area bg-img bg-overlay section-padding-100 jarallax"
         style="background-image: url('img/bg-img/15.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- Testimonial Slides -->
                <div class="testimonial-slides owl-carousel">

                    <!-- Single Slide -->
                    <div class="single-slide">
                        <!-- Testimonial Text -->
                        <div class="testi-text d-flex">
                            <div class="quote-icon">
                                <img src="img/core-img/quote.png" alt="">
                            </div>
                            <h5>"Thank you for your organic products. My children like your products and they use for
                                breakfast. We are loving the pure milk, freshly fruit and of course our staple, Brown
                                Rice Bread. Your Gluten Free breads truly make me feel
                                lighter and uplifted. It's the only bread I plan to eat for the rest of my life. I will
                                use them for many years."</h5>
                        </div>
                        <!-- Testimonial Thumbnail Name -->
                        <div class="testimonial-thumbnail-name d-flex align-items-center">
                            <div class="testimonial-thumbnail">
                                <img src="img/bg-img/16.jpg" alt="">
                            </div>
                            <div class="testimonial-name">
                                <h5>Mrs Lara Sullivan</h5>
                                <h6>Customer</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Slide -->
                    <div class="single-slide">
                        <!-- Testimonial Text -->
                        <div class="testi-text d-flex">
                            <div class="quote-icon">
                                <img src="img/core-img/quote.png" alt="">
                            </div>
                            <h5>"Thank you for your organic products. My children like your products and they use for
                                breakfast. We are loving the pure milk, freshly fruit and of course our staple, Brown
                                Rice Bread. Your Gluten Free breads truly make me feel
                                lighter and uplifted. It's the only bread I plan to eat for the rest of my life. I will
                                use them for many years."</h5>
                        </div>
                        <!-- Testimonial Thumbnail Name -->
                        <div class="testimonial-thumbnail-name d-flex align-items-center">
                            <div class="testimonial-thumbnail">
                                <img src="img/bg-img/16.jpg" alt="">
                            </div>
                            <div class="testimonial-name">
                                <h5>Ajoy Das</h5>
                                <h6>Client</h6>
                            </div>
                        </div>
                    </div>

                    <!-- Single Slide -->
                    <div class="single-slide">
                        <!-- Testimonial Text -->
                        <div class="testi-text d-flex">
                            <div class="quote-icon">
                                <img src="img/core-img/quote.png" alt="">
                            </div>
                            <h5>"Thank you for your organic products. My children like your products and they use for
                                breakfast. We are loving the pure milk, freshly fruit and of course our staple, Brown
                                Rice Bread. Your Gluten Free breads truly make me feel
                                lighter and uplifted. It's the only bread I plan to eat for the rest of my life. I will
                                use them for many years."</h5>
                        </div>
                        <!-- Testimonial Thumbnail Name -->
                        <div class="testimonial-thumbnail-name d-flex align-items-center">
                            <div class="testimonial-thumbnail">
                                <img src="img/bg-img/16.jpg" alt="">
                            </div>
                            <div class="testimonial-name">
                                <h5>Akash Khan</h5>
                                <h6>Customer</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Testimonial Area End ##### -->

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row justify-content-between">

            <!-- Contact Content -->
            <div class="col-12 col-lg-5">
                <div class="contact-content mb-100">
                    <!-- Section Heading -->
                    <div class="section-heading">
                        <p>Contact now</p>
                        <h2><span>Get In Touch</span> With Us</h2>
                        <img src="img/core-img/decor.png" alt="">
                    </div>
                    <!-- Contact Form Area -->
                    <div class="contact-form-area">
                        <form action="index.html" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="name" placeholder="Your Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email">
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Your Subject">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" cols="30" rows="10"
                                              placeholder="Your Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn famie-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Contact Maps -->
            <div class="col-lg-6">
                <div class="contact-maps mb-100">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28313.28917392649!2d-88.2740948914384!3d41.76219337461615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880efa1199df6109%3A0x8a1293b2ae8e0497!2sE+New+York+St%2C+Aurora%2C+IL%2C+USA!5e0!3m2!1sen!2sbd!4v1542893000723"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->

<!-- ##### News Area Start ##### -->

<!-- ##### News Area End ##### -->

<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <!-- Main Footer Area -->
    <div class="main-footer bg-img bg-overlay section-padding-80-0" style="background-image: url(img/bg-img/3.jpg);">
        <div class="container">
            <div class="row">

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <a href="#" class="foo-logo d-block mb-30"><img src="img/core-img/logo2.png" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consecte stare adipiscing elit. In act honcus risus atiner
                            Pellentesque risus.</p>
                        <div class="contact-info">
                            <p><i class="fa fa-map-pin" aria-hidden="true"></i><span>120 Raymond Rd, New York</span></p>
                            <p><i class="fa fa-envelope" aria-hidden="true"></i><span>info.deercreative@gmail.com</span>
                            </p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i><span>+84 223 9000</span></p>
                        </div>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <h5 class="widget-title">QUICK LINK</h5>
                        <!-- Footer Widget Nav -->
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#">Purchase</a></li>
                                <li><a href="#">Policities</a></li>
                                <li><a href="#">Shipping</a></li>
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Return</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Payments</a></li>
                                <li><a href="#">Partners</a></li>
                                <li><a href="#">Guide</a></li>
                                <li><a href="#">Standard</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Brands</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <h5 class="widget-title">RECENT NEWS</h5>

                        <!-- Single Recent News Start -->
                        <div class="single-recent-blog d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/4.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">WA’s largest farming business on the market</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>

                        <!-- Single Recent News Start -->
                        <div class="single-recent-blog d-flex align-items-center">
                            <div class="post-thumbnail">
                                <img src="img/bg-img/5.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="#" class="post-title">Beef retail prices hit a record</a>
                                <div class="post-date">18 Aug 2018</div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Single Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget mb-80">
                        <h5 class="widget-title">STAY CONNECTED</h5>
                        <!-- Footer Social Info -->
                        <div class="footer-social-info">
                            <a href="#">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                                <span>Facebook</span>
                            </a>
                            <a href="#">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                                <span>Twitter</span>
                            </a>
                            <a href="#">
                                <i class="fab fa-pinterest" aria-hidden="true"></i>
                                <span>Pinterest</span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Copywrite Area  -->
    <div class="copywrite-area">
        <div class="container">
            <div class="copywrite-text">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <small><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy
                            <script>document.write(new Date().getFullYear());</script>
                            All rights reserved | This template is made with <i class="fa fa-heart-o"
                                                                                aria-hidden="true"></i> by <a
                                href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </small>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-nav">
                            <nav>
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About</a></li>
                                    <li><a href="{{ route('products') }}">Products</a></li>
                                    <li><a href="{{ route('news') }}">News</a></li>
                                    <li><a href="{{ route('contact') }}">Contact</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ mix('/js/app.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/classynav.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/jquery.sticky.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.scrollup.min.js') }}"></script>
<script src="{{ asset('js/jarallax.min.js') }}"></script>
<script src="{{ asset('js/jarallax-video.min.js') }}"></script>
<script src="{{ asset('js/active.js') }}"></script>

</body>

</html>
