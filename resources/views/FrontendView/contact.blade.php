@extends('FrontendView.Layout.frontendlayout')
@section('pageTitle')
    Contact Us | Maruf Abdullah
@endsection

@section('bodyContent')
    <!-- Contact Start  -->

    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="contact-page-title">
                        <h2>Contact With Maruf A.</h2>
                        <p>Aliquam vehicula faucibus facilisis. Cras est lectus, luctus nec blandit eget, gravida in dolor.</p>
                    </div>
                </div>
            </div>
            <div class="row contact-area-bg">
                <div class="col-md-12 col-lg-6">
                    <div class="contact-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="contact-box">
                                    <i class="fa-solid fa-phone-volume"></i>
                                    <h3>Call Me</h3>
                                    <a href="tel:+8801400537793">(880) 1400-537793</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="contact-box">
                                    <i class="fa-solid fa-envelope-open-text"></i>
                                    <h3>Email</h3>
                                    <a href="mailto:hellomarufrion@gmail.com">hellomarufrion@gmail.com</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-box">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <h3>Location</h3>
                                    <a href="https://maps.app.goo.gl/UHXcB1m8S1XYhCxQA" target="_blank">College Para, Chuadanga Sadar, Chuadanga Bangladesh 7200</a>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="contact-box-social">
                                    <ul>
                                        <li><a href="https://www.facebook.com/marufcsediuweb" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/marufcsediuweb" target="_blank"><i class="fa-brands fa-square-twitter"></i></a></li>
                                        <li><a href="https://www.linkedin.com/in/marufcsediuweb" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                                        <li><a href="https://wa.me/8801400537793" target="_blank"><i class="fa-brands fa-square-whatsapp"></i></a></li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="contact-form">
                        <form action="" method="post" class="form-method">
                            <input type="text" name="Full-Name" placeholder="Full Name">
                            <input type="text" name="Phone-Number" placeholder="Phone Number">
                            <input type="text" name="Email" placeholder="Your Email">
                            <input type="text" name="Subject" placeholder="Subject">
                            <textarea name="Textarea" placeholder="Type Your Message" ></textarea>
                            <input type="submit" value="Submit">
                            <label for="note">Note: Form is not enabled still now</label>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact End  -->
@endsection
