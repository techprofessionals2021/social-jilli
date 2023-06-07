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
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="{{url('/')}}">Home</a>
                                </li>
                                <li>
                                    <span>Contact</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact -->
        <div class="contact-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <h2>Get In Touch</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis distinctio quaerat corrupti natus dolores officiis quidem? Dolore repellat id unde nemo.</p>
                </div>
                <form id="contactForm">
                    <div class="row">
                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label>
                                    <i class='bx bx-user'></i>
                                </label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name*" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label>
                                    <i class='bx bx-mail-send'></i>
                                </label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label>
                                    <i class='bx bx-phone-call'></i>
                                </label>
                                <input type="text" name="phone_number" id="phone_number" placeholder="Phone" required data-error="Please enter your number" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-6">
                            <div class="form-group">
                                <label>
                                    <i class='bx bxs-edit'></i>
                                </label>
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <div class="form-group">
                                <label>
                                    <i class='bx bx-comment-detail'></i>
                                </label>
                                <textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="Write message" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12 col-md-12">
                            <div class="form-group">
                                <div class="form-check agree-label">
                                    <input
                                        name="gridCheck"
                                        value="I agree to the terms and privacy policy."
                                        class="form-check-input"
                                        type="checkbox"
                                        id="gridCheck"
                                        required
                                    >
                                    <label class="form-check-label" for="gridCheck">
                                        Accept <a href="terms-condition.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy.</a>
                                    </label>
                                    <div class="help-block with-errors gridCheck-error"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-lg-12">
                            <button type="submit" class="btn cmn-btn">
                                Send Message
                                <i class='bx bx-plus'></i>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Contact -->

        <!-- Contact Info -->
        <div class="contact-info-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="info-item">
                        <h2>Contact With Phone Number or Email Address</h2>
                        <ul class="mail-call">
                            <li>
                                <a href="#">123456</a>
                            </li>
                            <li>
                                <a href="mailto:hello@socialjiili.com">abc.com</a>
                            </li>
                        </ul>
                        <ul class="social-item">
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
        <!-- End Contact Info -->

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

    @endsection

@section("script")

@endsection
