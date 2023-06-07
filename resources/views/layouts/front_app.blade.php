<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/bootstrap.min.css')}}">
    <!-- Meanmenu CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/meanmenu.css')}}">
    <!-- Boxicons CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/boxicons.min.css')}}">
    <!-- Flaticons CSC -->
    <link rel="stylesheet" href="{{asset('front-assets/fonts/flaticon.css')}}">
    <!-- Popup CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/magnific-popup.min.css')}}">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/odometer.min.css')}}">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('front-assets/css/owl.theme.default.min.css')}}">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/animate.min.css')}}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/responsive.css')}}">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="{{asset('front-assets/css/theme-dark.css')}}">
    @yield("style")
    <title>Social Jiili</title>

    <link rel="icon" type="image/png" href="#">
</head>
<body>
<!-- Preloader -->
<div class="loader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner">
                <div class="rect1"></div>
                <div class="rect2"></div>
                <div class="rect3"></div>
                <div class="rect4"></div>
                <div class="rect5"></div>
            </div>
        </div>
    </div>
</div>
<!-- End Preloader -->

<!-- Start Navbar Area -->
<div class="navbar-area fixed-top">
    <!-- Menu For Mobile Device -->
    <div class="mobile-nav">
        <a href="{{url('/')}}" class="logo">
            <img src="{{asset('front-assets/img/logo-two.png')}}" alt="Logo">
        </a>
    </div>

    <!-- Menu For Desktop Device -->
    <div class="main-nav {{url()->current() != url('/') ? "two":""}}">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('front-assets/img/logo-two.png')}}" class="logo-one w-50" alt="Logo">
                    <!--                            <img src="{{asset('front-assets/img/logo-twoo.png')}}" class="logo-two" alt="Logo">-->
                </a>
                <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{url('/')}}" class="nav-link {{url()->current() == url('/') ? "active":""}}">Home</a>
                            <!--                                    <a href="#" class="nav-link dropdown-toggle active">Home <i class='bx bx-chevron-down'></i></a>-->
                            <!--                                    <ul class="dropdown-menu">-->
                            <!--                                        <li class="nav-item">-->
                            <!--                                            <a href="{{url('/')}}" class="nav-link active">Sass Startup Demo</a>-->
                            <!--                                        </li>-->
                            <!--                                        <li class="nav-item">-->
                            <!--                                            <a href="it-startup.html" class="nav-link">IT Startup Demo</a>-->
                            <!--                                        </li>-->
                            <!--                                        <li class="nav-item">-->
                            <!--                                            <a href="digital.html" class="nav-link">Digital Marketing Demo</a>-->
                            <!--                                        </li>-->
                            <!--                                    </ul>-->
                        </li>
                        <!--                                <li class="nav-item">-->
                        <!--                                    <a href="#" class="nav-link dropdown-toggle">Pages <i class='bx bx-chevron-down'></i></a>-->
                        <!--                                    <ul class="dropdown-menu">-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="#" class="nav-link dropdown-toggle">User <i class='bx bx-chevron-down'></i></a>-->
                        <!--                                            <ul class="dropdown-menu">-->
                        <!--                                                <li class="nav-item">-->
                        <!--                                                    <a href="sign-in.html" class="nav-link">Sign In</a>-->
                        <!--                                                </li>-->
                        <!--                                                <li class="nav-item">-->
                        <!--                                                    <a href="sign-up.html" class="nav-link">Sign Up</a>-->
                        <!--                                                </li>-->
                        <!--                                            </ul>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="features.html" class="nav-link">Features</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="team.html" class="nav-link">Team</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="testimonials.html" class="nav-link">Testimonials</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="pricing.html" class="nav-link">Pricing</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="faq.html" class="nav-link">FAQ</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="404.html" class="nav-link">404 Error Page</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>-->
                        <!--                                        </li>-->
                        <!--                                    </ul>-->
                        <!--                                </li>-->
                        <li class="nav-item">
                            <a href="{{url('about')}}" class="nav-link {{url()->current() == url('about') ? "active":""}}">About</a>
                        </li>
                        <li class="nav-item">
{{--                            <a href="{{url('services')}}" class="nav-link {{url()->current() == url('services') ? "active":""}}">Services</a>--}}
                            <a href="{{ route('service_package_for_front')}}" class="nav-link">Services</a>
                        </li>
                        <!--                                <li class="nav-item">-->
                        <!--                                    <a href="#" class="nav-link dropdown-toggle">Services <i class='bx bx-chevron-down'></i></a>-->
                        <!--                                    <ul class="dropdown-menu">-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="services.html" class="nav-link">Service Style One</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="services-2.html" class="nav-link">Service Style Two</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="service-details.html" class="nav-link">Service Details</a>-->
                        <!--                                        </li>-->
                        <!--                                    </ul>-->
                        <!--                                </li>-->
                        <!--                                <li class="nav-item">-->
                        <!--                                    <a href="#" class="nav-link dropdown-toggle">Projects <i class='bx bx-chevron-down'></i></a>-->
                        <!--                                    <ul class="dropdown-menu">-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="projects.html" class="nav-link">Projects</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="project-details.html" class="nav-link">Project Details</a>-->
                        <!--                                        </li>-->
                        <!--                                    </ul>-->
                        <!--                                </li>-->
                        <!--                                <li class="nav-item">-->
                        <!--                                    <a href="#" class="nav-link dropdown-toggle">Blog <i class='bx bx-chevron-down'></i></a>-->
                        <!--                                    <ul class="dropdown-menu">-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="blog.html" class="nav-link">Blog</a>-->
                        <!--                                        </li>-->
                        <!--                                        <li class="nav-item">-->
                        <!--                                            <a href="blog-details.html" class="nav-link">Blog Details</a>-->
                        <!--                                        </li>-->
                        <!--                                    </ul>-->
                        <!--                                </li>-->
                        <li class="nav-item">
                            <a href="{{url('contact')}}" class="nav-link {{url()->current() == url('contact') ? "active":""}}">Contact</a>
                        </li>
                    </ul>
                    <div class="side-nav">
                        @guest
                        <a class="left-btn" href="{{route('login')}}">
                            <i class='bx bx-log-in'></i>
                            Sign In
                        </a>
                        @else
                            <a class="left-btn" href="{{route('home')}}">
                                <i class='bx bx-home'></i>
                                Dashboard
                            </a>
                        @endguest
                        <a href="#" class="cmn-btn">
                            Start Project
                            <i class='bx bx-plus'></i>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- End Navbar Area -->

<!--start page wrapper -->
    @yield("wrapper")
<!--end page wrapper -->

<!-- Footer -->
<footer class="pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a href="{{url('/')}}">
                            <img src="{{asset('front-assets/img/logo-two.png')}}" alt="Logo">
                        </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adiisicing elit, sed do eiusmod tempor inc Neque porro quisquam est, qui dolorem  magnam aliquam quaerat luptatem.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Support</h3>
                        <ul>
                            <li>
                                <a href="faq.html" target="_blank">FAQ</a>
                            </li>
                            <li>
                                <a href="privacy-policy.html" target="_blank">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="terms-condiitons.html" target="_blank">Terms & Condiitons</a>
                            </li>
                            <li>
                                <a href="#" target="_blank">Community</a>
                            </li>
                            <li>
                                <a href="conatct.html" target="_blank">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-links">
                        <h3>Compnay</h3>
                        <ul>
                            <li>
                                <a href="about.html" target="_blank">About Us</a>
                            </li>
                            <li>
                                <a href="services.html" target="_blank">Services</a>
                            </li>
                            <li>
                                <a href="features.html" target="_blank">Features</a>
                            </li>
                            <li>
                                <a href="pricing.html" target="_blank">Our Pricing</a>
                            </li>
                            <li>
                                <a href="blog.html" target="_blank">Latest News</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="footer-item">
                    <div class="footer-address">
                        <h3>Address</h3>
                        <ul>
                            <li>
                                <span>Address:</span>

                            </li>
                            <li>
                                <span>Message:</span>
                                <a href="#">acd.com</a>
                            </li>
                            <li>
                                <span>Phone:</span>
                                <a href="#">123456</a>
                            </li>
                            <li>
                                <span>Open:</span>
                                Mon - Fri/9:00 AM - 6:00 PM
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->

<!-- Copyright -->
<div class="copyright-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="copyright-item">
                    <p>Copyright @<script>document.write(new Date().getFullYear())</script></p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="copyright-item">
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
                                <i class='bx bxl-pinterest-alt'></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" target="_blank">
                                <i class='bx bxl-youtube'></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Copyright -->

<!-- Go Top -->
<div class="go-top">
    <i class='bx bx-up-arrow'></i>
    <i class='bx bx-up-arrow'></i>
</div>
<!-- End Go Top -->


<!-- Essential JS -->
<script src="{{asset('front-assets/js/jquery.min.js')}}"></script>
<script src="{{asset('front-assets/js/bootstrap.bundle.min.js')}}"></script>
<!-- Form Validator JS -->
<script src="{{asset('front-assets/js/form-validator.min.js')}}"></script>
<!-- Contact JS -->
<script src="{{asset('front-assets/js/contact-form-script.js')}}"></script>
<!-- Ajax Chip JS -->
<script src="{{asset('front-assets/js/jquery.ajaxchimp.min.js')}}"></script>
<!-- Meanmenu JS -->
<script src="{{asset('front-assets/js/jquery.meanmenu.js')}}"></script>
<!-- Popup JS -->
<script src="{{asset('front-assets/js/jquery.magnific-popup.min.js')}}"></script>
<!-- Odometer JS -->
<script src="{{asset('front-assets/js/odometer.min.js')}}"></script>
<script src="{{asset('front-assets/js/jquery.appear.js')}}"></script>
<!-- Owl Carousel JS -->
<script src="{{asset('front-assets/js/owl.carousel.min.js')}}"></script>
<!-- Thumb Slider JS -->
<script src="{{asset('front-assets/js/thumb-slide.js')}}"></script>
<!-- Wow JS -->
<script src="{{asset('front-assets/js/wow.min.js')}}"></script>
<!-- Custom JS -->
<script src="{{asset('front-assets/js/custom.js')}}"></script>
@yield("script")
</body>
</html>
