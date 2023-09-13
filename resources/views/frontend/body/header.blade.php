@php

$cdate = new DateTime();
@endphp

@php
$breaking_news = App\Models\NewsPost::where('status',1)->where('breaking_news',1)->limit(20)->orderBy('created_at', 'desc')->get();
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!--====== HEADER PART START ======-->

    <header class="header-area">
        <div class="header-topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <div class="topbar-trending">
                            <span>{{  GoogleTranslate::trans('Breaking News', app()->getLocale() )  }}</span>
                            <div class="trending-slider">

                                @foreach($breaking_news as $item)
                                <div class="trending-item">

                                    <p>{{ Str::limit(GoogleTranslate::trans($item->news_title, app()->getLocale()), 80) }}</p>

                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="topbar-social d-flex align-items-center">
                            <p>{{ $cdate->format('l, M d, Y')  }}</p>
                            <div class="social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-centerbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="logo">
                            <a href="index.html">
                                <img src="assets/images/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="header-centerbar-ad">
                            <a href="#"><img src="assets/images/ad/ad-1.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>




















        <div class="header-menubar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-sm-3 col-3">
                        <div class="header-menu">
                            <div class="stellarnav">
                                <ul>




                                    <li><a href="">Pages</a>
                                        <ul>
                                            <li><a href="about-us.html">About Us</a></li>
                                            <li><a href="archive.html">Archive</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="404.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="">Posts</a>

                                        <ul>
                                            <li class="has-sub"><a href="#">General Posts</a>
                                                <ul>
                                                    <li><a href="post-1.html">Post 1</a>
                                                    </li>
                                                    <li><a href="post-2.html">Post 2</a>
                                                    </li>
                                                    <li><a href="post-3.html">Post 3</a>
                                                    </li>
                                                </ul>
                                                <a class="dd-toggle" href="#"><span class="icon-plus"></span></a>
                                            </li>
                                            <li class="has-sub"><a href="#">Video Posts</a>
                                                <ul>
                                                    <li><a href="#">Video Style 1</a>
                                                    </li>
                                                    <li><a href="#">Video Style 2</a>
                                                    </li>
                                                    <li><a href="#">Video Style 3</a>
                                                    </li>
                                                </ul>
                                                <a class="dd-toggle" href="#"><span class="icon-plus"></span></a>
                                            </li>
                                            <li class="has-sub"><a href="#">Audio Posts</a>
                                                <ul>
                                                    <li><a href="#">Audio Style 1</a>
                                                    </li>
                                                    <li><a href="#">Audio Style 2</a>
                                                    </li>
                                                    <li><a href="#">Audio Style 3</a>
                                                    </li>
                                                </ul>
                                                <a class="dd-toggle" href="#"><span class="icon-plus"></span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">Categories </a>
                                        <ul>
                                            <li class="active"><a href="business.html">Business</a>
                                            </li>
                                            <li><a href="entertainment.html">Entertainment</a>
                                            </li>
                                            <li><a href="features.html">Features</a>
                                            </li>
                                            <li><a href="sports.html">Sports</a>
                                            </li>
                                            <li><a href="trending.html">Trending</a>
                                            </li>
                                            <li><a href="technology.html">Technology</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="">World</a></li>
                                    <li><a href="">Sports</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div><!-- .stellarnav -->
                        </div>
                    </div>


                    <div class="col-lg-4 col-sm-9 col-9">
                        <div class="header-menu-rightbar">
                            <div class="header-menu-search">
                                <ul>
                                    <li><a href="#"><i class="fal fa-search"></i></a></li>
                                    <li><a href="#"><i class="fal fa-user-circle"></i></a></li>
                                </ul>
                            </div>
                            <div >
                                    <!--====== class="nice-select-item" ======-->
                                <select class="form-select changeLang">
                                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                    <option value="de" {{ session()->get('locale') == 'de' ? 'selected' : '' }}>Deutsch</option>
                                    <option value="nl" {{ session()->get('locale') == 'nl' ? 'selected' : '' }}>Niederlande</option>
                                    <option value="ar" {{ session()->get('locale') == 'ar' ? 'selected' : '' }}>Arabisch</option>

                                </select>
                            </div>
                            <div class="header-temperature">
                                <div class="icon">
                                    <img src="assets/images/temperature-icon.svg" alt="">
                                </div>
                                <div class="temperature-content text-center">
                                    <h5 class="title">13 <sup>0<sub>C</sub></sup></h5>
                                    <p>San Francisco</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!--====== HEADER PART ENDS ======-->
    <script type="text/javascript">

        var url = "{{ route('changeLang') }}";
        $(".changeLang").change(function(){
            window.location.href = url + "?lang="+$(this).val();
        });
    </script>
