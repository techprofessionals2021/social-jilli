@extends("layouts.front_app")

@section("style")

@endsection

    @section("wrapper")
        <!-- Banner -->
        <div class="banner-area">
            <div class="banner-shape">
                <img class="animate__animated animate__fadeInUp" src="{{asset('front-assets/img/sass/banner-main.png')}}" alt="Banner">
                <img src="{{asset('front-assets/img/sass/banner-shape1.png')}}" alt="Banner">
                <img src="{{asset('front-assets/img/sass/banner-shape2.png')}}" alt="Banner">
                <img src="{{asset('front-assets/img/sass/banner-shape3.png')}}" alt="Banner">
                <img src="{{asset('front-assets/img/sass/banner-shape2.png')}}" alt="Banner">
                <img src="{{asset('front-assets/img/sass/banner-shape3.png')}}" alt="Banner">
            </div>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="banner-content">
                            <span>
                                <img src="{{asset('front-assets/img/sass/banner-shape4.png')}}" alt="Shape">
                                 abc startup
                            </span>
                            <h1>Manage Your<br> Business Platform</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do<br> eiusmod tempor incididunt ut labore et dolore magna aliqua<br> Utenim ad minim veniam</p>
                            <div class="banner-btn">
                                <a href="#" class="cmn-btn">
                                    Start Project
                                    <i class='bx bx-plus'></i>
                                </a>
                                <a class="popup-youtube banner-btn-right" href="">
                                    <i class='bx bx-play'></i>
                                    Play The Video
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Banner -->

        <!-- Service -->
        <section class="service-area pb-70">
            <div class="service-shape">
                <img src="{{asset('front-assets/img/sass/service-shape2.png')}}" alt="Shape">
            </div>
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Offering Services</span>
                    <h2>Our Amazing Features</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <i class="flaticon-cloud-storage"></i>
                            <h3>
                                <a href="#">Best SMM Panel</a>
                            </h3>
                            <p>SMM Forest provides the highest quality of promotions. We are one of the best SMM reseller panels including some special services out there online.</p>
                            <img class="img-one" src="{{asset('front-assets/img/sass/service-shape.png')}}" alt="Shape">
                            <img class="img-two" src="{{asset('front-assets/img/sass/service-shape1.png')}}" alt="Shape">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <i class="flaticon-clock"></i>
                            <h3>
                                <a href="#">Website Growth</a>
                            </h3>
                            <p>SMM Forest is a modern and efficient wholesale panel. We try to provide you with instant promotions on different social media platforms.</p>
                            <img class="img-one" src="{{asset('front-assets/img/sass/service-shape.png')}}" alt="Shape">
                            <img class="img-two" src="{{asset('front-assets/img/sass/service-shape1.png')}}" alt="Shape">
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="service-item">
                            <i class="flaticon-save-time"></i>
                            <h3>
                                <a href="#">SMM Ranking</a>
                            </h3>
                            <p>We provide guaranteed service on our website SMM server. </p>
                            <img class="img-one" src="{{asset('front-assets/img/sass/service-shape.png')}}" alt="Shape">
                            <img class="img-two" src="{{asset('front-assets/img/sass/service-shape1.png')}}" alt="Shape">
                        </div>
                    </div>
{{--                    <div class="col-sm-6 col-lg-4">--}}
{{--                        <div class="service-item">--}}
{{--                            <i class="flaticon-administration"></i>--}}
{{--                            <h3>--}}
{{--                                <a href="#">Easily Manage</a>--}}
{{--                            </h3>--}}
{{--                            <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>--}}
{{--                            <img class="img-one" src="{{asset('front-assets/img/sass/service-shape.png')}}" alt="Shape">--}}
{{--                            <img class="img-two" src="{{asset('front-assets/img/sass/service-shape1.png')}}" alt="Shape">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-lg-4">--}}
{{--                        <div class="service-item">--}}
{{--                            <i class="flaticon-unlocked"></i>--}}
{{--                            <h3>--}}
{{--                                <a href="#">Quick Access</a>--}}
{{--                            </h3>--}}
{{--                            <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>--}}
{{--                            <img class="img-one" src="{{asset('front-assets/img/sass/service-shape.png')}}" alt="Shape">--}}
{{--                            <img class="img-two" src="{{asset('front-assets/img/sass/service-shape1.png')}}" alt="Shape">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-lg-4">--}}
{{--                        <div class="service-item">--}}
{{--                            <i class="flaticon-scroll"></i>--}}
{{--                            <h3>--}}
{{--                                <a href="#">Drag And Drop</a>--}}
{{--                            </h3>--}}
{{--                            <p>Lorem ipsum dolor sit ametaut odiut perspiciatis unde omnis iste quuntur alquam quaerat rsit amet</p>--}}
{{--                            <img class="img-one" src="{{asset('front-assets/img/sass/service-shape.png')}}" alt="Shape">--}}
{{--                            <img class="img-two" src="{{asset('front-assets/img/sass/service-shape1.png')}}" alt="Shape">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </section>
        <!-- End Service -->

        <!-- About -->
        <section class="about-area pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title">
                                <span class="sub-title">About Us</span>
                                <h2>Our Company Is The Best To Serve</h2>
                            </div>
                            <ul>
                                <li>
                                    <i class="flaticon-checkmark"></i>
                                    <h4>QR Code Scanner</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiumod tempor incididunt ut labore</p>
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i>
                                    <h4>CRM Software Management</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiumod tempor incididunt ut labore</p>
                                </li>
                                <li>
                                    <i class="flaticon-checkmark"></i>
                                    <h4>Organization Skills & Management</h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiumod tempor incididunt ut labore</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{asset('front-assets/img/sass/about-main.png')}}" alt="About">
                            <img src="{{asset('front-assets/img/sass/about1.png')}}" alt="Shape">
                            <img src="{{asset('front-assets/img/sass/about2.png')}}" alt="Shape">
                            <img src="{{asset('front-assets/img/sass/about3.png')}}" alt="Shape">
                            <div class="video-wrap">
                                <a href="#link" class="popup-youtube">
                                    <i class='bx bx-play'></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End About -->

        <!-- how its work -->
        <section class="service-area pt-100 pb-70">
            <div class="container">
                <div class="section-title two">
                    <span class="sub-title">HOW IT WORK</span>
                    <h2>How We Are Helping</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="service-item-two">
                            <img src="{{asset('front-assets/img/it-startup/service1.png')}}" alt="Service">
                            <h3>
                                <a>Register & Login</a>
                            </h3>
                            <p>Creating an account is the first step. then you need to log in</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="service-item-two">
                            <img src="{{asset('front-assets/img/it-startup/service2.png')}}" alt="Service">
                            <h3>
                                <a>Add Fund</a>
                            </h3>
                            <p>Next, pick a payment method and add funds to your account</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="service-item-two">
                            <img src="{{asset('front-assets/img/it-startup/service3.png')}}" alt="Service">
                            <h3>
                                <a>Select a Service</a>
                            </h3>
                            <p>Select the services you want and get ready to receive more publicity</p>

                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="service-item-two">
                            <img src="{{asset('front-assets/img/it-startup/service4.png')}}" alt="Service">
                            <h3>
                                <a>Enjoy Super Results</a>
                            </h3>
                            <p>You can enjoy incredible results when your order is complete</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- how its work -->

        <!-- Inquiry -->
        <section class="inquiry-area">
            <div class="inquiry-shape">
                <img src="{{asset('front-assets/img/sass/inquiry1.png')}}" alt="Shape">
                <img src="{{asset('front-assets/img/sass/inquiry2.png')}}" alt="Shape">
                <img src="{{asset('front-assets/img/sass/inquiry3.png')}}" alt="Shape">
                <img src="{{asset('front-assets/img/sass/inquiry4.png')}}" alt="Shape">
                <img src="{{asset('front-assets/img/sass/inquiry5.png')}}" alt="Shape">
            </div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="inquiry-img">
                            <img src="{{asset('front-assets/img/sass/inquiry-main.png')}}" alt="Inquiry">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="inquiry-content">
                            <div class="section-title">
                                <span class="sub-title">Project Inquiry</span>
                                <h2>Have Any Questions Regarding The Project About?</h2>
                            </div>
                            <a href="#" class="cmn-btn">
                                Start Project
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Inquiry -->

        <!-- Feature -->
{{--        <section class="feature-area pt-100 pb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title">--}}
{{--                    <span class="sub-title">Features</span>--}}
{{--                    <h2>We Provide Maximum</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>--}}
{{--                </div>--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="feature-img">--}}
{{--                            <img src="{{asset('front-assets/img/sass/feature1.png')}}" alt="Feature">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="feature-content">--}}
{{--                            <div class="feature-top">--}}
{{--                                <span>01</span>--}}
{{--                                <h2>Getting Started Page</h2>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6 col-lg-6">--}}
{{--                                    <div class="feature-inner">--}}
{{--                                        <i class="flaticon-graphic-design"></i>--}}
{{--                                        <h3>Unique Design</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-lg-6">--}}
{{--                                    <div class="feature-inner">--}}
{{--                                        <i class="flaticon-video-camera"></i>--}}
{{--                                        <h3>Unlimited Video Call</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="cmn-btn">--}}
{{--                                Read More--}}
{{--                                <i class='bx bx-plus'></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="feature-content">--}}
{{--                            <div class="feature-top">--}}
{{--                                <span>02</span>--}}
{{--                                <h2>Review Code & Illustration</h2>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6 col-lg-6">--}}
{{--                                    <div class="feature-inner">--}}
{{--                                        <i class="flaticon-contact"></i>--}}
{{--                                        <h3>Add Favourite contact</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-lg-6">--}}
{{--                                    <div class="feature-inner">--}}
{{--                                        <i class="flaticon-laptop"></i>--}}
{{--                                        <h3>Start Coding Format</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="cmn-btn">--}}
{{--                                Read More--}}
{{--                                <i class='bx bx-plus'></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="feature-img">--}}
{{--                            <img src="{{asset('front-assets/img/sass/feature2.png')}}" alt="Feature">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="feature-img">--}}
{{--                            <img src="{{asset('front-assets/img/sass/feature3.png')}}" alt="Feature">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-6">--}}
{{--                        <div class="feature-content">--}}
{{--                            <div class="feature-top">--}}
{{--                                <span>03</span>--}}
{{--                                <h2>Premium Comments Toggling</h2>--}}
{{--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>--}}
{{--                            </div>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-sm-6 col-lg-6">--}}
{{--                                    <div class="feature-inner">--}}
{{--                                        <i class="flaticon-chat"></i>--}}
{{--                                        <h3>Outdated Comments</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-6 col-lg-6">--}}
{{--                                    <div class="feature-inner">--}}
{{--                                        <i class="flaticon-sketch"></i>--}}
{{--                                        <h3>Mordan Design</h3>--}}
{{--                                        <p>Lorem ipsum dolor sit ame consetur adipisicing em ipsum</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <a href="#" class="cmn-btn">--}}
{{--                                Read More--}}
{{--                                <i class='bx bx-plus'></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- End Feature -->

        <!-- Counter -->
        <section class="counter-area pt-100 pb-70">
            <div class="counter-shape">
                <img src="{{asset('front-assets/img/sass/counter-bg.png')}}" alt="Shape">
            </div>
            <div class="container">
                <h2>The Secrets to Life Success People <span>Have Got</span></h2>
                <div class="row">
                    <div class="col-6 col-sm-3 col-lg-3">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="100">00</span>
                                <span class="target">M</span>
                            </h3>
                            <p>Data Entry</p>
                            <img src="{{asset('front-assets/img/sass/counter1.png')}}" alt="Shape">
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="850">00</span>
                                <span class="target">+</span>
                            </h3>
                            <p>Appreciation</p>
                            <img src="{{asset('front-assets/img/sass/counter1.png')}}" alt="Shape">
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="1000K">00</span>
                                <span class="target">K</span>
                            </h3>
                            <p>Satisfied Client</p>
                            <img src="{{asset('front-assets/img/sass/counter1.png')}}" alt="Shape">
                        </div>
                    </div>
                    <div class="col-6 col-sm-3 col-lg-3">
                        <div class="counter-item">
                            <h3>
                                <span class="odometer" data-count="140">00</span>
                                <span class="target">K</span>
                            </h3>
                            <p>Response Time</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Counter -->

        <!-- Application -->
{{--        <section class="application-area ptb-100">--}}
{{--            <div class="application-shape">--}}
{{--                <img src="{{asset('front-assets/img/sass/application1.png')}}" alt="Shape">--}}
{{--                <img src="{{asset('front-assets/img/sass/application2.png')}}" alt="Shape">--}}
{{--            </div>--}}
{{--            <div class="container-fluid p-0">--}}
{{--                <div class="row m-0 align-items-center">--}}
{{--                    <div class="col-sm-6 col-lg-7">--}}
{{--                        <div class="application-content">--}}
{{--                            <div class="section-title">--}}
{{--                                <span class="sub-title">Application Building</span>--}}
{{--                                <h2>Way To Build Beautiful Interface's Your Application</h2>--}}
{{--                            </div>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <i class="flaticon-checkmark"></i>--}}
{{--                                    QR Code Scanner--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="flaticon-checkmark"></i>--}}
{{--                                    Start Coding Format--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="flaticon-checkmark"></i>--}}
{{--                                    Organizations Skills & Management--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="flaticon-checkmark"></i>--}}
{{--                                    Add Favourite Contact--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <i class="flaticon-checkmark"></i>--}}
{{--                                    Unlimited Video Call--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                            <a href="#" class="cmn-btn">--}}
{{--                                Read More--}}
{{--                                <i class='bx bx-plus'></i>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-lg-5 pr-0">--}}
{{--                        <div class="application-img">--}}
{{--                            <img src="{{asset('front-assets/img/sass/application-main.png')}}" alt="Application">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
        <!-- End Application -->

        <!-- Pricing -->
        <section class="pricing-area pb-70">
            <div class="pricing-shape">
                <img src="{{asset('front-assets/img/sass/pricing-shape.png')}}" alt="Shape">
            </div>
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Pricing Plans</span>
                    <h2>Affordable Pricing</h2>
                </div>
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">
                            <i class='bx bx-plus'></i>
                            Monthly Plan
                        </a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">
                            <i class='bx bx-plus'></i>
                            Yearly Plan
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 p-0">
                                <div class="pricing-item">
                                    <div class="top">
                                            <span>
                                                <i class="flaticon-checkmark"></i>
                                                Free
                                            </span>
                                    </div>
                                    <div class="middle">
                                        <h3><span class="left">$</span> 0.00/<span class="right">Month</span></h3>
                                    </div>
                                    <div class="end">
                                        <ul>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Google Analytics
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Drag & Drop Widgets
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Mobile + Desktop Apps
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Messenger Integration
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                100 ChatBot Triggers
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Info
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Quick Response
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                24/7 Live Chat
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Email Integration
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Notes
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Integration Email
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                        </ul>
                                        <a href="#" class="cmn-btn">
                                            Get Started
                                            <i class='bx bx-plus'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 p-0">
                                <div class="pricing-item two">
                                    <div class="top">
                                            <span>
                                                <i class="flaticon-checkmark"></i>
                                                Starter
                                            </span>
                                    </div>
                                    <div class="middle">
                                        <h3><span class="left">$</span> 49.99/<span class="right">Month</span></h3>
                                    </div>
                                    <div class="end">
                                        <ul>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Google Analytics
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Drag & Drop Widgets
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Mobile + Desktop Apps
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Messenger Integration
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                100 ChatBot Triggers
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Info
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Quick Response
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                24/7 Live Chat
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Email Integration
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Notes
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Integration Email
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                        </ul>
                                        <a href="#" class="cmn-btn">
                                            Get Started
                                            <i class='bx bx-plus'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4 p-0">
                                <div class="pricing-item">
                                    <div class="top">
                                            <span>
                                                <i class="flaticon-checkmark"></i>
                                                Enterprise
                                            </span>
                                    </div>
                                    <div class="middle">
                                        <h3><span class="left">$</span> 56.00/<span class="right">Month</span></h3>
                                    </div>
                                    <div class="end">
                                        <ul>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Google Analytics
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Drag & Drop Widgets
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Mobile + Desktop Apps
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Messenger Integration
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                100 ChatBot Triggers
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Info
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Quick Response
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                24/7 Live Chat
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Email Integration
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Notes
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Integration Email
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                        </ul>
                                        <a href="#" class="cmn-btn">
                                            Get Started
                                            <i class='bx bx-plus'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <div class="col-sm-6 col-lg-4 p-0">
                                <div class="pricing-item">
                                    <div class="top">
                                            <span>
                                                <i class="flaticon-checkmark"></i>
                                                Free
                                            </span>
                                    </div>
                                    <div class="middle">
                                        <h3><span class="left">$</span> 0.00/<span class="right">Year</span></h3>
                                    </div>
                                    <div class="end">
                                        <ul>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Google Analytics
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Drag & Drop Widgets
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Mobile + Desktop Apps
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Messenger Integration
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                100 ChatBot Triggers
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Info
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Quick Response
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                24/7 Live Chat
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Email Integration
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Notes
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Integration Email
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                        </ul>
                                        <a href="#" class="cmn-btn">
                                            Get Started
                                            <i class='bx bx-plus'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-4 p-0">
                                <div class="pricing-item two">
                                    <div class="top">
                                            <span>
                                                <i class="flaticon-checkmark"></i>
                                                Starter
                                            </span>
                                    </div>
                                    <div class="middle">
                                        <h3><span class="left">$</span> 49.99/<span class="right">Year</span></h3>
                                    </div>
                                    <div class="end">
                                        <ul>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Google Analytics
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Drag & Drop Widgets
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Mobile + Desktop Apps
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Messenger Integration
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                100 ChatBot Triggers
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Info
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Quick Response
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                24/7 Live Chat
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Email Integration
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Notes
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Integration Email
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                        </ul>
                                        <a href="#" class="cmn-btn">
                                            Get Started
                                            <i class='bx bx-plus'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4 p-0">
                                <div class="pricing-item">
                                    <div class="top">
                                            <span>
                                                <i class="flaticon-checkmark"></i>
                                                Enterprise
                                            </span>
                                    </div>
                                    <div class="middle">
                                        <h3><span class="left">$</span> 56.00/<span class="right">Year</span></h3>
                                    </div>
                                    <div class="end">
                                        <ul>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Google Analytics
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Drag & Drop Widgets
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Mobile + Desktop Apps
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Messenger Integration
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                100 ChatBot Triggers
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Info
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Quick Response
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                24/7 Live Chat
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Email Integration
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Visitor Notes
                                            </li>
                                            <li>
                                                <i class="flaticon-curved-arrow-pointing-to-right"></i>
                                                Integration Email
                                                <i class="flaticon-exclamation two"></i>
                                            </li>
                                        </ul>
                                        <a href="#" class="cmn-btn">
                                            Get Started
                                            <i class='bx bx-plus'></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Pricing -->

        <!-- Feedback -->
        <section class="feedback-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Client Feedbacks</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
                </div>
                <div class="outer">
                    <div class="shape">
                        <img src="{{asset('front-assets/img/sass/feedback-main.png')}}" alt="Main">
                    </div>
                    <div class="row">
                        <div class="col-lg-5">
                            <div id="thumbs" class="owl-carousel owl-theme">
                                <div class="item">
                                    <img src="{{asset('front-assets/img/sass/feedback1.png')}}" alt="Thumb">
                                </div>
                                <div class="item">
                                    <img src="{{asset('front-assets/img/sass/feedback2.png')}}" alt="Thumb">
                                </div>
                                <div class="item">
                                    <img src="{{asset('front-assets/img/sass/feedback3.png')}}" alt="Thumb">
                                </div>
                                <div class="item">
                                    <img src="{{asset('front-assets/img/sass/feedback1.png')}}" alt="Thumb">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div id="big" class="owl-carousel owl-theme">
                                <div class="item">
                                    <div class="feedback-content">
                                        <i class="flaticon-left-quote"></i>
                                        <p>Awesome dolor sit amet, consectetur adipisicing elit, sed do eusmod tempor incididunt ut labore et dolore magna aliquaenminim veniam quis nostrud  dolore magn dolore</p>
                                        <h3>abcd</h3>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feedback-content">
                                        <i class="flaticon-left-quote"></i>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.</p>
                                        <h3>abcd</h3>
                                        <span>Manager</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feedback-content">
                                        <i class="flaticon-left-quote"></i>
                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-les.</p>
                                        <h3>abcd</h3>
                                        <span>Director</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="feedback-content">
                                        <i class="flaticon-left-quote"></i>
                                        <p>Awesome dolor sit amet, consectetur adipisicing elit, sed do eusmod tempor incididunt ut labore et dolore magna aliquaenminim veniam quis nostrud  dolore magn dolore</p>
                                        <h3>abcd</h3>
                                        <span>CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Feedback -->

        <!-- Partner -->
        <div class="partner-area">
            <div class="container-fluid p-0">
                <div class="partner-slider owl-theme owl-carousel">
                    <div class="partner-item">
                        <img src="{{asset('front-assets/img/sass/partner1.png')}}" class="partner-item-logo1" alt="Partner">
                        <img src="{{asset('front-assets/img/sass/partner-style1.png')}}" class="partner-item-logo2" alt="Partner">
                    </div>
                    <div class="partner-item">
                        <img src="{{asset('front-assets/img/sass/partner2.png')}}" class="partner-item-logo1" alt="Partner">
                        <img src="{{asset('front-assets/img/sass/partner-style2.png')}}" class="partner-item-logo2" alt="Partner">
                    </div>
                    <div class="partner-item">
                        <img src="{{asset('front-assets/img/sass/partner3.png')}}" class="partner-item-logo1" alt="Partner">
                        <img src="{{asset('front-assets/img/sass/partner-style3.png')}}" class="partner-item-logo2" alt="Partner">
                    </div>
                    <div class="partner-item">
                        <img src="{{asset('front-assets/img/sass/partner4.png')}}" class="partner-item-logo1" alt="Partner">
                        <img src="{{asset('front-assets/img/sass/partner-style4.png')}}" class="partner-item-logo2" alt="Partner">
                    </div>
                    <div class="partner-item">
                        <img src="{{asset('front-assets/img/sass/partner5.png')}}" class="partner-item-logo1" alt="Partner">
                        <img src="{{asset('front-assets/img/sass/partner-style5.png')}}" class="partner-item-logo2" alt="Partner">
                    </div>
                    <div class="partner-item">
                        <img src="{{asset('front-assets/img/sass/partner6.png')}}" class="partner-item-logo1" alt="Partner">
                        <img src="{{asset('front-assets/img/sass/partner-style6.png')}}" class="partner-item-logo2" alt="Partner">
                    </div>
                    <div class="partner-item">
                        <img src="{{asset('front-assets/img/sass/partner1.png')}}" class="partner-item-logo1" alt="Partner">
                        <img src="{{asset('front-assets/img/sass/partner-style1.png')}}" class="partner-item-logo2" alt="Partner">
                    </div>
                </div>
            </div>
        </div>
        <!-- End Partner -->

        <!-- FAQ -->
        <div class="faq-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <h2>What Do You Want To <span>Know?</span></h2>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="faq-content">
                            <ul class="accordion">
                                <li>
                                    <a>
                                        How can I cancel/pause my subscription?
                                        <i class="flaticon-visibility"></i>
                                        <i class="flaticon-eye two"></i>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud ullamco nisi ut aliquip</p>
                                </li>
                                <li>
                                    <a>
                                        Does the price go up as my team gets larger?
                                        <i class="flaticon-visibility"></i>
                                        <i class="flaticon-eye two"></i>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud ullamco nisi ut aliquip</p>
                                </li>
                                <li>
                                    <a>
                                        What access do I have on a free trial?
                                        <i class="flaticon-visibility"></i>
                                        <i class="flaticon-eye two"></i>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud ullamco nisi ut aliquip</p>
                                </li>
                                <li>
                                    <a>
                                        What access do I have on the free plan?
                                        <i class="flaticon-visibility"></i>
                                        <i class="flaticon-eye two"></i>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud ullamco nisi ut aliquip</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="faq-img">
                            <img src="{{asset('front-assets/img/sass/faq-main.png')}}" alt="FAQ">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End FAQ -->

        <!-- Mind -->
        <div class="mind-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="mind-left">
                            <h2>Have A Project In Mind? Let's Work Together</h2>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="mind-right">
                            <a href="#" class="cmn-btn">
                                Get Started Project
                                <i class='bx bx-plus'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Mind -->

    @endsection

@section("script")

@endsection
