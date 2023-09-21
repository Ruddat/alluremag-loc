@extends('portal-frontend.layouts.default')
@section('content')
    <!--====== CONTACT INFO PART START ======-->

    <div class="contact-info-area pt-70 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item mt-30">
                        <h3 class="title">Headquarters</h3>
                        <span><i class="fas fa-map-marker-alt"></i> LOCATION:</span>
                        <ul>
                            <li>44 Canal Center Plaza #200</li>
                            <li>Alexandria, VA 22314, USA</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item mt-30">
                        <h3 class="title">Let’s talk</h3>
                        <span><i class="fas fa-phone"></i> CALL NOW:</span>
                        <ul>
                            <li>+41 27 966 26690</li>
                            <li>+880 1945 381758</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-item mt-30">
                        <h3 class="title">Let’s chat</h3>
                        <span><i class="fas fa-envelope"></i> EMAIL:</span>
                        <ul>
                            <li>hello@newspark.com</li>
                            <li>adsales@@newspark.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2451.0772874312147!2d9.66257027744079!3d52.09652497195322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47babd7eaed7f9eb%3A0x4e5f433e31aa41b5!2sRasti-Land!5e0!3m2!1sen!2sbd!4v1695268036174!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--====== CONTACT INFO PART ENDS ======-->

    <!--====== CONTACT PART START ======-->

    <section class="contact-area pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact-box">
                        <form action="#" class="contact-form">
                            @csrf
                            <h3 class="title">{{ (GoogleTranslate::trans('Let’s work together!', app()->getLocale())) }} <br> {{ (GoogleTranslate::trans('Fill out the form.', app()->getLocale())) }}</h3>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" id="name" placeholder="{{ (GoogleTranslate::trans('Full name', app()->getLocale())) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" class="form-control" name="subject" placeholder="{{ (GoogleTranslate::trans('Subject', app()->getLocale())) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="text" class="form-control" name="email" placeholder="{{ (GoogleTranslate::trans('Email address', app()->getLocale())) }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-box">
                                        <input type="tel" id="phone" name="phone" placeholder="{{ (GoogleTranslate::trans('Phone number', app()->getLocale())) }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <textarea class="form-control" name="message" id="#" cols="30" rows="10" placeholder="{{ (GoogleTranslate::trans('Tell us about your message…', app()->getLocale())) }}" required> </textarea>
                                        <button class="main-btn , contact-button"  type="submit">{{ (GoogleTranslate::trans('SEND MESSAGE', app()->getLocale())) }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-sidebar">
                        <div class="trending-social">
                            <div class="section-title">
                                <h3 class="title">{{ (GoogleTranslate::trans('Follow us', app()->getLocale())) }}</h3>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                        <span>34,456</span>
                                        <p>Fans</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="item-2" href="#">
                                        <i class="fab fa-twitter"></i>
                                        <span>34,456</span>
                                        <p>Followers</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="item-3" href="#">
                                        <i class="fab fa-youtube"></i>
                                        <span>34,456</span>
                                        <p>Subscribers</p>
                                    </a>
                                </li>
                            </ul>
                            <ul>
                                <li>
                                    <a class="item-4" href="#">
                                        <i class="fab fa-instagram"></i>
                                        <span>34,456</span>
                                        <p>Followers</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="item-5" href="#">
                                        <i class="fab fa-vimeo-v"></i>
                                        <span>34,456</span>
                                        <p>Followers</p>
                                    </a>
                                </li>
                                <li>
                                    <a class="item-6" href="#">
                                        <i class="fab fa-maxcdn"></i>
                                        <span>34,456</span>
                                        <p>Fans</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="post-newsletter mt-30">
                            <h3 class="title">{{ (GoogleTranslate::trans('Newsletter', app()->getLocale())) }}</h3>
                            <p>{{ (GoogleTranslate::trans('Your email address will not be this published. Required fields are News Today.', app()->getLocale())) }}</p>
                            <form action="#">
                                <div class="input-box">
                                    <input type="text" placeholder="Your email address">
                                    <button type="button">SIGN UP</button>
                                </div>
                            </form>
                            <span>We hate spam as much as you do</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== CONTACT PART ENDS ======-->

    <!--====== ADD PART ENDS ======-->

    <div class="add-area text-center">
        <a href="#">
            <img src="{{ asset('frontend/') }}/assets/images/ad/ad-1.png" alt="">
        </a>
    </div>

    <!--====== ADD PART ENDS ======-->
@stop
