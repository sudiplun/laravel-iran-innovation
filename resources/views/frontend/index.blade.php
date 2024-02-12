@extends('frontend.layouts.main')
@section('main-content')
    <!-- Slider Area -->
    <section class="slider">
        <div class="hero-slider">
            <!-- Start Single Slider -->
            @foreach ($sliders as $slider)
                <div class="single-slider" style="background-image:url({{ "storage/$slider->photo" }})">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="text">
                                    <h1>{{ $slider->head }}</h1>
                                    <p>{!! $slider->description !!}</p>
                                    <div class="button">
                                        <a href="#" class="btn">Get Appointment</a>
                                        <a href="#" class="btn primary">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slider -->
            @endforeach
        </div>
    </section>
    <!-- End Slider Area -->

    <!-- Start Schedule Area -->
    <section class="schedule">
        <div class="container">
            <div class="schedule-inner">
                <div class="row">
                    @foreach ($cards as $card)
                        <div class="col-lg-4 col-md-6 col-12 ">
                            <!-- single-schedule -->
                            <div class="single-schedule first">
                                <div class="inner">
                                    <div class="icon">
                                        <i class="fa fa-ambulance"></i>
                                    </div>
                                    <div class="single-content">
                                        <span>{{ $card->sub_title }}</span>
                                        <h4>{{ $card->title }}</h4>
                                        <p>{!! $card->description !!}</p>
                                        <a href="{{ $card->Link }}">LEARN MORE<i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--/End Start schedule Area -->

    <!-- Start Feautes -->
    <section class="Feautes section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Are Always Ready to Help You & Your Family</h2>
                        <img src="background-image:url({{ url('frontend/img/section-img.png') }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="icofont icofont-ambulance-cross"></i>
                        </div>
                        <h3>Emergency Help</h3>
                        <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features">
                        <div class="signle-icon">
                            <i class="icofont icofont-medical-sign-alt"></i>
                        </div>
                        <h3>Enriched Pharmecy</h3>
                        <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                    </div>
                    <!-- End Single features -->
                </div>
                <div class="col-lg-4 col-12">
                    <!-- Start Single features -->
                    <div class="single-features last">
                        <div class="signle-icon">
                            <i class="icofont icofont-stethoscope"></i>
                        </div>
                        <h3>Medical Treatment</h3>
                        <p>Lorem ipsum sit, consectetur adipiscing elit. Maecenas mi quam vulputate.</p>
                    </div>
                    <!-- End Single features -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Feautes -->

    <!-- Start Fun-facts -->
    <div id="fun-facts" class="fun-facts section overlay">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-home"></i>
                        <div class="content">
                            <span class="counter">3468</span>
                            <p>Hospital Rooms</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-user-alt-3"></i>
                        <div class="content">
                            <span class="counter">557</span>
                            <p>Specialist Doctors</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont-simple-smile"></i>
                        <div class="content">
                            <span class="counter">4379</span>
                            <p>Happy Patients</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Fun -->
                    <div class="single-fun">
                        <i class="icofont icofont-table"></i>
                        <div class="content">
                            <span class="counter">32</span>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                    <!-- End Single Fun -->
                </div>
            </div>
        </div>
    </div>
    <!--/ End Fun-facts -->

    <!-- Start Why choose -->
    <section class="why-choose section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2> To Improve Your Health</h2>
                        <img src="{{ url('frontend/img/section-img.png') }}" alt="#">
                        <p>While we should always strive to accomplish these types of health goals, the road to better
                            health doesn't always have to mean making huge leaps.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Left -->
                    <div class="choose-left">
                        <h3>Who We Are</h3>
                        @foreach ($whoWeAres as $whoWeAre)
                            <p>
                                {!! $whoWeAre->description !!}
                            </p>
                        @endforeach
                    </div>
                    <!-- End Choose Left -->
                </div>
                <div class="col-lg-6 col-12">
                    <!-- Start Choose Rights -->
                    <div class="choose-right">
                        <div class="video-image">
                            <!-- Video Animation -->
                            <div class="promo-video">
                                <div class="waves-block">
                                    <div class="waves wave-1"></div>
                                    <div class="waves wave-2"></div>
                                    <div class="waves wave-3"></div>
                                </div>
                            </div>
                            <!--/ End Video Animation -->
                            <a href="https://www.youtube.com/watch?v=RFVXy6CRVR4" class="video video-popup mfp-iframe"><i
                                    class="fa fa-play"></i></a>
                        </div>
                    </div>
                    <!-- End Choose Rights -->
                </div>
            </div>
        </div>
    </section>
    <!--/ End Why choose -->

    <!-- Start Call to action -->
    <section class="call-action overlay" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="content">
                        <h2>Do you need Emergency Medical Care? Call @ 1234 56789</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque porttitor dictum turpis nec
                            gravida.</p>
                        <div class="button">
                            <a href="#" class="btn">Contact Now</a>
                            <a href="#" class="btn second">Learn More<i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End Call to action -->

    <!-- Start portfolio -->
    <section class="portfolio section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Maintain Cleanliness Rules Inside Our Hospital</h2>
                        <img src="{{ url('frontend/img/section-img.png') }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="owl-carousel portfolio-slider">
                        <div class="single-pf">
                            <img src="{{ url('frontend/img/pf1.jpg') }}" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ url('frontend/img/pf2.jpg') }}" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ url('frontend/img/pf3.jpg') }}" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ url('frontend/img/pf4.jpg') }}" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ url('frontend/img/pf1.jpg') }}" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ url('frontend/img/pf2.jpg') }}" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ url('frontend/img/pf3.jpg') }}" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                        <div class="single-pf">
                            <img src="{{ url('frontend/img/pf4.jpg') }}" alt="#">
                            <a href="portfolio-details.html" class="btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ End portfolio -->

    <!-- Start service -->
    <section class="services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Offer Different Services To Improve Your Health</h2>
                        <img src="{{ url('frontend/img/section-img.png') }}" alt="#">
                        <p>A lot of factors play a role in staying healthy. In turn, good health can decrease your risk of
                            developing certain diseases or conditions.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($services as $service)
                    <div class="col-lg-4 col-md-6 col-12">
                        <!-- Start Single Service -->
                        <div class="single-service">
                            <div class="d-flex">
                                <img class="img-fluid" style="max-width: 48px;" src="{{ 'storage/' . $service->icon }}">
                                <h4 style="margin-top: 7px;">{{ $service->title }}</h4>
                            </div>
                            <p>{!! $service->description !!}</p>
                        </div>
                        <!-- End Single Service -->
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/ End service -->

    <!-- Pricing Table -->
    <section class="pricing-table section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Provide You The Best Treatment In Resonable Price</h2>
                        <img src="{{ url('frontend/img/section-img.png') }}" alt="#">
                        <p>Providing affordable and quality medical treatment to all citizens is a challenge faced by any
                            government. Few advance countries even </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Table -->
                @foreach ($pricings as $pricing)
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="single-table">
                            <!-- Table Head -->
                            <div class="table-head">
                                <div class="icon">
                                    <img src="{{ 'storage/' . $pricing->icon }}">
                                </div>
                                <h4 class="title">{{ $pricing->title }}</h4>
                                <div class="price">
                                    <p class="amount">{{ $pricing->price }}<span>/ Per Visit</span></p>
                                </div>
                            </div>
                            <!-- Table List -->
                            <ul class="table-list">
                                <li><i class="icofont icofont-ui-check"></i>Lorem ipsum dolor sit</li>
                                <li><i class="icofont icofont-ui-check"></i>Cubitur sollicitudin fentum</li>
                                <li class="cross"><i class="icofont icofont-ui-close"></i>Nullam interdum enim</li>
                                <li class="cross"><i class="icofont icofont-ui-close"></i>Donec ultricies metus</li>
                                <li class="cross"><i class="icofont icofont-ui-close"></i>Pellentesque eget nibh</li>
                            </ul>
                            <div class="table-bottom">
                                <a class="btn" href="#">Book Now</a>
                            </div>
                            <!-- Table Bottom -->
                        </div>
                    </div>
                @endforeach
                <!-- End Single Table-->
            </div>
        </div>
    </section>
    <!--/ End Pricing Table -->
    <!-- Start Blog Area -->
    <section class="blog section" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Keep up with Our Most Recent Medical News.</h2>
                        <img src="{{ url('frontend/img/section-img.png') }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ url('frontend/img/blog1.jpg') }}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">22 Aug, 2020</div>
                                <h2><a href="blog-single.html">We have annnocuced our new product.</a></h2>
                                <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt sed do incididunt sed.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ url('frontend/img/blog2.jpg') }}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">15 Jul, 2020</div>
                                <h2><a href="blog-single.html">Top five way for solving teeth problems.</a></h2>
                                <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt sed do incididunt sed.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Single Blog -->
                    <div class="single-news">
                        <div class="news-head">
                            <img src="{{ url('frontend/img/blog3.jpg') }}" alt="#">
                        </div>
                        <div class="news-body">
                            <div class="news-content">
                                <div class="date">05 Jan, 2020</div>
                                <h2><a href="blog-single.html">We provide highly business soliutions.</a></h2>
                                <p class="text">Lorem ipsum dolor a sit ameti, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt sed do incididunt sed.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Blog -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog Area -->

    <!-- Start clients -->
    {{-- <div class="clients overlay">
        <div class="container">
            <div class="row grid">
                <div class="col-lg-12 col-md-12 col-12">
                    <div class="owl-carousel owl-theme clients-slider">
                        <div class="single-clients">
                            <img src="{{ url('frontend/img/client1.png') }}" alt="#">
</div>
<div class="single-clients">
    <img src="{{ url('frontend/img/client2.png') }}" alt="#">
</div>
<div class="single-clients">
    <img src="{{ url('frontend/img/client3.png') }}" alt="#">
</div>
<div class="single-clients">
    <img src="{{ url('frontend/img/client4.png') }}" alt="#">
</div>
<div class="single-clients">
    <img src="{{ url('frontend/img/client5.png') }}" alt="#">
</div>
<div class="single-clients">
    <img src="{{ url('frontend/img/client1.png') }}" alt="#">
</div>
<div class="single-clients">
    <img src="{{ url('frontend/img/client2.png') }}" alt="#">
</div>
<div class="single-clients">
    <img src="{{ url('frontend/img/client3.png') }}" alt="#">
</div>
<div class="single-clients">
    <img src="{{ url('frontend/img/client4.png') }}" alt="#">
</div>
</div>
</div>
</div>
</div>
</div> --}}
    <!--/Ens clients -->

    <!-- Start Appointment -->
    <section class="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>We Are Always Ready to Help You. Book An Appointment</h2>
                        <img src="{{ url('frontend/img/section-img.png') }}" alt="#">
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit praesent aliquet. pretiumts</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12">
                    <form class="form" action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="name" type="text" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="email" type="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input name="phone" type="text" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                {{-- <div class="form-group">
                                <div class="nice-select form-control wide" tabindex="0"><span class="current">Department</span>
                                    <ul class="list">
                                        <li data-value="1" class="option" data-display="Select">Department</li>
                                        <li data-value="2" class="option">Cardiac Clinic</li>
                                        <li data-value="3" class="option">Neurology</li>
                                        <li data-value="4" class="option">Dentistry</li>
                                        <li data-value="5" class="option">Gastroenterology</li>
                                    </ul>
                                </div>
                            </div>
--}}
                                <div class="form-group">
                                    <input name="department" type="text" placeholder="Department">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <div class="form-group">
                                        <input name="doctor" type="text" placeholder="Doctor">
                                    </div>
                                    {{--
                                <div class="nice-select form-control wide" tabindex="3"><span class="current">Doctor</span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected ">Doctor</li>
                                        <li data-value="2" class="option">Dr. Akther Hossain</li>
                                        <li data-value="3" class="option">Dr. Dery Alex</li>
                                        <li data-value="4" class="option">Dr. Jovis Karon</li>
                                    </ul>
                                </div>
--}}
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-group">
                                    <input type="text" placeholder="Date" id="datepicker">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-12">
                                <div class="form-group">
                                    <textarea name="message" placeholder="Write Your Message Here....."></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5 col-md-4 col-12">
                                <div class="form-group">
                                    <div class="button">
                                        <!-- button -->
                                        <button type="submit" class="btn">Book An Appointment</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-8 col-12">
                                <p>( We will be confirm by an Text Message )</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 ">
                    <div class="appointment-image">
                        <img src="{{ url('frontend/img/contact-img.png') }}" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Appointment -->

    <!-- Start Newsletter Area -->
    <section class="newsletter section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-text ">
                        <h6>Sign up for newsletter</h6>
                        <p class="">Cu qui soleat partiendo urbanitas. Eum aperiri indoctum eu,<br> homero alterum.
                        </p>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
                <div class="col-lg-6  col-12">
                    <!-- Start Newsletter Form -->
                    <div class="subscribe-form ">
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Your email address" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your email address'"
                                required="" type="email">
                            <button class="btn">Subscribe</button>
                        </form>
                    </div>
                    <!-- End Newsletter Form -->
                </div>
            </div>
        </div>
    </section>
@endsection
