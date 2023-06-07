@extends("layouts.front_app")

@section("style")

@endsection

    @section("wrapper")
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="bg-text">
                <span>Social Jiili<br>Social Jiili<br>Jiili Social<br>Social Jiili</span>
            </div>
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-item">
                            <h2>About</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <span>About</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Design -->
        <section class="design-area two pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="design-content">
                            <div class="section-title two">
                                <span class="sub-title">OUR COMPANY</span>
                                <h2>We Are Agency Of Digital It Support</h2>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiumod tempor incididunt ut labore et dolore</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut um doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit asperni  elit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="design-img">
                            <img src="{{asset('front-assets/img/it-startup/design1.png')}}" alt="Design">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Design -->

        <!-- Counter -->
        <section class="counter-area two pt-100">
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
                            <img src="{{asset('front-assets/img/sass/video-img.png')}}" alt="Shape">
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

        <!-- Video -->
        <div class="video-area">
            <div class="container">
                <div class="video-img">

                    <div class="video-main">
                        <img src="{{asset('front-assets/img/it-startup/video-img.jpg')}}" alt="Video">
                        <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="popup-youtube">
                            <i class='bx bx-play'></i>
                        </a>
                    </div>

                    <div class="video-shape">
                        <img src="{{asset('front-assets/img/it-startup/video-shape1.png')}}" alt="Shape">
                        <img src="{{asset('front-assets/img/it-startup/video-shape2.png')}}" alt="Shape">
                    </div>

                </div>
            </div>
        </div>
        <!-- End Video -->

        <!-- Team -->
        <section class="team-area three pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="team-content">
                            <div class="section-title two">
                                <span class="sub-title">OUR TEAM</span>
                                <h2>Dedicated Team Support Helping You</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusul dolor sit amet, consecteturadipisci sed quia non numquam eius modi tempora</p>
                            </div>
                            <a href="team.html" class="cmn-btn">
                                More Members
                                <i class='bx bx-plus'></i>
                            </a>
                            <img src="{{asset('front-assets/img/it-startup/team-shape.png')}}" alt="Shape">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="team-item">
                                    <img src="{{asset('front-assets/img/it-startup/team1.png')}}" alt="Team">
                                    <div class="team-bottom">
                                        <h3>abcd</h3>
                                        <span>CEO & Founder</span>
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-twitter'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-instagram'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-linkedin'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="team-item two">
                                    <img src="{{asset('front-assets/img/it-startup/team2.png')}}" alt="Team">
                                    <div class="team-bottom">
                                        <h3>abcd</h3>
                                        <span>Manager</span>
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-twitter'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-instagram'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-linkedin'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="team-item">
                                    <img src="{{asset('front-assets/img/it-startup/team3.png')}}" alt="Team">
                                    <div class="team-bottom">
                                        <h3>abcd</h3>
                                        <span>Director</span>
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-twitter'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-instagram'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-linkedin'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="team-item two">
                                    <img src="{{asset('front-assets/img/it-startup/team4.png')}}" alt="Team">
                                    <div class="team-bottom">
                                        <h3>abcd</h3>
                                        <span>Engineer</span>
                                        <ul>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-facebook'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-twitter'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-instagram'></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" target="_blank">
                                                    <i class='bx bxl-linkedin'></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Team -->

        <!-- App -->
{{--        <div class="app-area pt-100 pb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}

{{--                    <div class="col-lg-6">--}}
{{--                        <div class="app-img">--}}
{{--                            <img src="{{asset('front-assets/img/app-main.png')}}" alt="App">--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="col-lg-6">--}}
{{--                        <div class="app-content">--}}
{{--                            <div class="section-title two">--}}
{{--                                <span class="sub-title">DOWNLOAD APP</span>--}}
{{--                                <h2>Get More In Our Application Sit Back And Enjoy</h2>--}}
{{--                            </div>--}}
{{--                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>--}}
{{--                            <ul>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="{{asset('front-assets/img/app1.png')}}" alt="App">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="#">--}}
{{--                                        <img src="{{asset('front-assets/img/app2.png')}}" alt="App">--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <!-- End App -->

        <!-- Feedback -->
{{--        <section class="feedback-area two ptb-100">--}}
{{--            <div class="container">--}}
{{--                <div class="section-title">--}}
{{--                    <h2>Client Feedbacks</h2>--}}
{{--                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>--}}
{{--                </div>--}}
{{--                <div class="outer">--}}
{{--                    <div class="shape">--}}
{{--                        <img src="{{asset('front-assets/img/sass/feedback-main.png')}}" alt="Main">--}}
{{--                    </div>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-5">--}}
{{--                            <div id="thumbs" class="owl-carousel owl-theme">--}}
{{--                                <div class="item">--}}
{{--                                    <img src="{{asset('front-assets/img/sass/feedback1.png')}}" alt="Thumb">--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <img src="{{asset('front-assets/img/sass/feedback2.png')}}" alt="Thumb">--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <img src="{{asset('front-assets/img/sass/feedback3.png')}}" alt="Thumb">--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <img src="{{asset('front-assets/img/sass/feedback1.png')}}" alt="Thumb">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-7">--}}
{{--                            <div id="big" class="owl-carousel owl-theme">--}}
{{--                                <div class="item">--}}
{{--                                    <div class="feedback-content">--}}
{{--                                        <i class="flaticon-left-quote"></i>--}}
{{--                                        <p>Awesome dolor sit amet, consectetur adipisicing elit, sed do eusmod tempor incididunt ut labore et dolore magna aliquaenminim veniam quis nostrud  dolore magn dolore</p>--}}
{{--                                        <h3>abcd</h3>--}}
{{--                                        <span>CEO & Founder</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="feedback-content">--}}
{{--                                        <i class="flaticon-left-quote"></i>--}}
{{--                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.</p>--}}
{{--                                        <h3>abc</h3>--}}
{{--                                        <span>Manager</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="feedback-content">--}}
{{--                                        <i class="flaticon-left-quote"></i>--}}
{{--                                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-les.</p>--}}
{{--                                        <h3>abc</h3>--}}
{{--                                        <span>Director</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="item">--}}
{{--                                    <div class="feedback-content">--}}
{{--                                        <i class="flaticon-left-quote"></i>--}}
{{--                                        <p>Awesome dolor sit amet, consectetur adipisicing elit, sed do eusmod tempor incididunt ut labore et dolore magna aliquaenminim veniam quis nostrud  dolore magn dolore</p>--}}
{{--                                        <h3>abcd</h3>--}}
{{--                                        <span>CEO & Founder</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
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

        <!-- Subscribe -->
        <div class="subscribe-area ptb-100">
            <div class="container">
                <div class="subscribe-item">
                    <div class="section-title two">
                        <h2>Subscribe Newsletters</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor indunt ut labore et dolore magna aliqua</p>
                    </div>
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">

                        <button class="btn cmn-btn" type="submit">
                            Subscribe Now
                            <i class='bx bx-plus'></i>
                        </button>
                        <div id="validator-newsletter" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->

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
                            <a href="projects.html" class="cmn-btn">
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
