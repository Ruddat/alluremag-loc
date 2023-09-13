
<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>AllureMag - News Magazine Template</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/fabicon.png') }}
    " type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}
    ">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}
    ">

    <!--====== stellarnav css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/stellarnav.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>


</head>

<body class="home-1-bg">

    <!--====== PRELOADER PART START ======-->
    <div class="preloader">
        <div>
            <div class="nb-spinner"></div>
        </div>
    </div>
    <!--====== PRELOADER PART ENDS ======-->

@include('frontend.body.header')

@yield('home')

    <!--====== POST PART START ======-->

    <div class="post-area">
        <div class="container">
            <div class="row post-slider">
                <div class="col-lg-4">
                    <div class="single__post">
                        <div class="post-thumb">
                            <img src="{{ asset('frontend/assets/images/post-1.jpg') }}" alt="post">
                        </div>
                        <div class="post-content">
                            <h4 class="title"><a href="#">The home decorations document: photograph of an empty plane</a></h4>
                            <p>People have been infected in United…</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single__post">
                        <div class="post-thumb">
                            <img src="{{ asset('frontend/assets/images/post-2.jpg') }}" alt="post">
                        </div>
                        <div class="post-content">
                            <h4 class="title"><a href="#">U.S. Response subash says he will label regions by risk of…</a></h4>
                            <p>People have been infected in United…</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single__post">
                        <div class="post-thumb">
                            <img src="{{ asset('frontend/assets/images/post-3.jpg') }}" alt="post">
                        </div>
                        <div class="post-content">
                            <h4 class="title"><a href="#">Stimul package will fundamentally transform the government.</a></h4>
                            <p>People have been infected in United…</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single__post">
                        <div class="post-thumb">
                            <img src="{{ asset('frontend/assets/images/post-2.jpg') }}" alt="post">
                        </div>
                        <div class="post-content">
                            <h4 class="title"><a href="#">U.S. Response subash says he will label regions by risk of…</a></h4>
                            <p>People have been infected in United…</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== POST PART ENDS ======-->

    <!--====== POST GALLERY PART START ======-->

    <div class="post__gallery__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="post_gallery_slider">
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">{{  GoogleTranslate::trans('Japan’s virus success has puzzled the world. Is its luck running out?', app()->getLocale() )  }}</a></h2>
                                <p>{{  GoogleTranslate::trans('The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…', app()->getLocale() )  }}</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                        <div class="post_gallery_play">
                            <div class="bg-image"></div>
                            <div class="post__gallery_play_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post_gallery_inner_slider">
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-1.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-3.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-4.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-5.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-6.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-7.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-2.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-3.jpg') }}" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/assets/images/gallery-post/item-4.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post_gallery_sidebar">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">TRENDY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">LATEST</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">POPULAR</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="post_gallery_items">
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-1.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Copa America: Luis Suarez from devastated US</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-2.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-3.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">U.S. Response subash says he will label regions by risk of…</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-4.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Venezuela elan govt and opposit the property collect</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-5.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Cheap smartphone sensor could help you old food safe</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="post_gallery_items">
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-1.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Copa America: Luis Suarez from devastated US</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-2.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-3.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">U.S. Response subash says he will label regions by risk of…</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-4.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Venezuela elan govt and opposit the property collect</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-5.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Cheap smartphone sensor could help you old food safe</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <div class="post_gallery_items">
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-1.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Copa America: Luis Suarez from devastated US</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-2.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-3.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">U.S. Response subash says he will label regions by risk of…</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-4.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Venezuela elan govt and opposit the property collect</a></h4>
                                        </div>
                                    </div>
                                    <div class="gallery_item">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/assets/images/gallery-5.jpg') }}" alt="gallery">
                                        </div>
                                        <div class="gallery_item_content">
                                            <div class="post-meta">
                                                <div class="meta-categories">
                                                    <a href="#">TECHNOLOGY</a>
                                                </div>
                                                <div class="meta-date">
                                                    <span>March 26, 2020</span>
                                                </div>
                                            </div>
                                            <h4 class="title"><a href="#">Cheap smartphone sensor could help you old food safe</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== POST GALLERY PART ENDS ======-->


@include('frontend.body.featurepart')
@include('frontend.body.trendingnews')
@include('frontend.body.singleplaypost')


@include('frontend.body.livetv')


    <!--====== ALL POST PART START ======-->

    <section class="all-post-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="post-entertainment">
                        <div class="section-title">
                            <h3 class="title">Entertainment News</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-news-item mb-30">
                                    <div class="trending-news-thumb">
                                        <img src="{{ asset('frontend/assets/images/entertainment-1.jpg') }}" alt="trending">
                                        <div class="circle-bar">

                                            <div class="first circle">
                                                <strong></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trending-news-content">
                                        <div class="post-meta">
                                            <div class="meta-categories">
                                                <a href="#">TECHNOLOGY</a>
                                            </div>
                                            <div class="meta-date">
                                                <span>March 26, 2020</span>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-news-item mb-30">
                                    <div class="trending-news-thumb">
                                        <img src="{{ asset('frontend/assets/images/entertainment-2.jpg') }}" alt="trending">
                                        <div class="circle-bar">

                                            <div class="first circle">
                                                <strong></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trending-news-content">
                                        <div class="post-meta">
                                            <div class="meta-categories">
                                                <a href="#">TECHNOLOGY</a>
                                            </div>
                                            <div class="meta-date">
                                                <span>March 26, 2020</span>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-news-item mb-30">
                                    <div class="trending-news-thumb">
                                        <img src="{{ asset('frontend/') }}assets/images/entertainment-3.jpg" alt="trending">
                                        <div class="circle-bar">

                                            <div class="first circle">
                                                <strong></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trending-news-content">
                                        <div class="post-meta">
                                            <div class="meta-categories">
                                                <a href="#">TECHNOLOGY</a>
                                            </div>
                                            <div class="meta-date">
                                                <span>March 26, 2020</span>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-news-item mb-30">
                                    <div class="trending-news-thumb">
                                        <img src="{{ asset('frontend/') }}assets/images/entertainment-4.jpg" alt="trending">
                                        <div class="circle-bar">

                                            <div class="first circle">
                                                <strong></strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="trending-news-content">
                                        <div class="post-meta">
                                            <div class="meta-categories">
                                                <a href="#">TECHNOLOGY</a>
                                            </div>
                                            <div class="meta-date">
                                                <span>March 26, 2020</span>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sports-news-area">
                        <div class="section-title">
                            <h3 class="title">Sports News</h3>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-news-item mb-30">
                                    <div class="trending-news-thumb">
                                        <img src="assets/images/sports-news.jpg" alt="sports">
                                    </div>
                                    <div class="trending-news-content">
                                        <div class="post-meta">
                                            <div class="meta-categories">
                                                <a href="#">TECHNOLOGY</a>
                                            </div>
                                            <div class="meta-date">
                                                <span>March 26, 2020</span>
                                            </div>
                                        </div>
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                        <a href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-sidebar-slider">
                                    <div class="post_gallery_items">
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-1.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">Copa America: Luis Suarez from devastated US</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-2.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-3.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">U.S. Response subash says he will label regions by risk of…</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-4.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">Venezuela elan govt and opposit the property collect</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-5.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">Cheap smartphone sensor could help you old food safe</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post_gallery_items">
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-1.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">Copa America: Luis Suarez from devastated US</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-2.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">Nancy Zhang a Chinese busy woman and Dhaka</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-3.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">U.S. Response subash says he will label regions by risk of…</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-4.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">Venezuela elan govt and opposit the property collect</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="assets/images/sports/sports-5.jpg" alt="sports">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a href="#">Cheap smartphone sensor could help you old food safe</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-add mt-30">
                        <a href="#"><img src="{{ asset('frontend/assets/images/ad/ad-1.png') }}" alt="ad"></a>
                    </div>
                    <div class="business-news-post pt-40">
                        <div class="section-title d-flex justify-content-between align-items-center">
                            <h3 class="title">Business News</h3>
                            <a href="#">ALL SEE</a>
                        </div>
                        <div class="business-post">
                            <div class="business-post-item mb-40">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="business-post-thumb">
                                            <img src="{{ asset('frontend/assets/images/business-1.jpg') }}" alt="business">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="trending-news-item">
                                            <div class="trending-news-content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                                <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="business-post-item mb-40">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="business-post-thumb">
                                            <img src="{{ asset('frontend/assets/images/business-2.jpg') }}" alt="business">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="trending-news-item">
                                            <div class="trending-news-content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                                <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="business-post-item mb-40">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="business-post-thumb">
                                            <img src="{{ asset('frontend/') }}assets/images/business-3.jpg" alt="business">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="trending-news-item">
                                            <div class="trending-news-content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                                <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="business-post-item">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="business-post-thumb">
                                            <img src="{{ asset('frontend/') }}assets/images/business-4.jpg" alt="business">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="trending-news-item">
                                            <div class="trending-news-content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href="#">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>March 26, 2020</span>
                                                    </div>
                                                </div>
                                                <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                                <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                                <a href="#">Read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="all-post-sidebar">
                        <div class="most-share-post">
                            <div class="section-title">
                                <h3 class="title">Most Share</h3>
                            </div>
                        </div>
                        <div class="trending-sidebar-slider">
                            <div class="most-share-post-items">
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>1</span>
                                    </div>
                                </div>
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>2</span>
                                    </div>
                                </div>
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>4</span>
                                    </div>
                                </div>
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>5</span>
                                    </div>
                                </div>
                            </div>
                            <div class="most-share-post-items">
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>1</span>
                                    </div>
                                </div>
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>2</span>
                                    </div>
                                </div>
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>4</span>
                                    </div>
                                </div>
                                <div class="most-share-post-item">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h3>
                                    <ul>
                                        <li><i class="fab fa-twitter"></i> 2.2K</li>
                                        <li><i class="fab fa-facebook-f"></i> 3.5K</li>
                                    </ul>
                                    <div class="count">
                                        <span>5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="upcoming-matches-post mt-35">
                            <div class="section-title d-flex justify-content-between align-items-center">
                                <h3 class="title">Upcoming Matches</h3>
                                <a href="#">ALL SEE</a>
                            </div>
                            <div class="upcoming-matches-post-items">
                                <div class="upcoming-matches-post-item d-flex align-items-center">
                                    <div class="upcoming-matches-flag">
                                        <img src="{{ asset('frontend/assets/images/flag/flag-1.png') }}" alt="flag">
                                    </div>
                                    <div class="upcoming-matches-content">
                                        <span>Germany <span>VS</span> France</span>
                                        <ul>
                                            <li>Tomorrow</li>
                                            <li>22:30 (CST)</li>
                                        </ul>
                                    </div>
                                    <div class="upcoming-matches-circle">
                                        <div class="circle-bar">

                                            <div class="first circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-matches-post-item d-flex align-items-center">
                                    <div class="upcoming-matches-flag">
                                        <img src="{{ asset('frontend/assets/images/flag/flag-2.png') }}" alt="flag">
                                    </div>
                                    <div class="upcoming-matches-content">
                                        <span>Spain <span>VS</span> Portugal</span>
                                        <ul>
                                            <li>Tomorrow</li>
                                            <li>22:30 (CST)</li>
                                        </ul>
                                    </div>
                                    <div class="upcoming-matches-circle">
                                        <div class="circle-bar">

                                            <div class="first circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-matches-post-item d-flex align-items-center">
                                    <div class="upcoming-matches-flag">
                                        <img src="{{ asset('frontend/assets/images/flag/flag-3.png') }}" alt="flag">
                                    </div>
                                    <div class="upcoming-matches-content">
                                        <span>Russia <span>VS</span> Italy</span>
                                        <ul>
                                            <li>Tomorrow</li>
                                            <li>22:30 (CST)</li>
                                        </ul>
                                    </div>
                                    <div class="upcoming-matches-circle">
                                        <div class="circle-bar">

                                            <div class="first circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-matches-post-item d-flex align-items-center">
                                    <div class="upcoming-matches-flag">
                                        <img src="{{ asset('frontend/') }}assets/images/flag/flag-4.png" alt="flag">
                                    </div>
                                    <div class="upcoming-matches-content">
                                        <span>Croatia <span>VS</span> England</span>
                                        <ul>
                                            <li>Tomorrow</li>
                                            <li>22:30 (CST)</li>
                                        </ul>
                                    </div>
                                    <div class="upcoming-matches-circle">
                                        <div class="circle-bar">

                                            <div class="first circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="upcoming-matches-post-item d-flex align-items-center">
                                    <div class="upcoming-matches-flag">
                                        <img src="{{ asset('frontend/assets/images/flag/flag-5.png') }}" alt="flag">
                                    </div>
                                    <div class="upcoming-matches-content">
                                        <span>Germany <span>VS</span> France</span>
                                        <ul>
                                            <li>Tomorrow</li>
                                            <li>22:30 (CST)</li>
                                        </ul>
                                    </div>
                                    <div class="upcoming-matches-circle">
                                        <div class="circle-bar">

                                            <div class="first circle">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="newsletter-box mt-45">
                            <h5 class="title">Newsletter</h5>
                            <p>Your email address will not be this published. Required fields are News Today.</p>
                            <form action="#">
                                <div class="input-box">
                                    <input type="text" placeholder="Your email address">
                                    <button type="button">SIGN UP</button>
                                </div>
                            </form>
                            <span>We hate spam as much as you do</span>
                        </div>
                        <div class="Categories-post mt-40">
                            <div class="section-title d-flex justify-content-between align-items-center">
                                <h3 class="title">Categories</h3>
                                <a href="#">ALL SEE</a>
                            </div>
                            <div class="Categories-item">
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}assets/images/categories-1.jpg" alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Restaurant</span>
                                            <img src="{{ asset('frontend/assets/images/arrow.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}assets/images/categories-2.jpg" alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Entertainment</span>
                                            <img src="{{ asset('frontend/assets/images/arrow.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}assets/images/categories-3.jpg" alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Financial</span>
                                            <img src="{{ asset('frontend/assets/images/arrow.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}assets/images/categories-4.jpg" alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Business</span>
                                            <img src="{{ asset('frontend/assets/images/arrow.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}assets/images/categories-5.jpg" alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Scientists</span>
                                            <img src="{{ asset('frontend/assets/images/arrow.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/assets/images/categories-6.jpg') }}" alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>International’s</span>
                                            <img src="{{ asset('frontend/assets/images/arrow.svg') }}" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-add pt-35">
                                <a href="#"><img src="{{ asset('frontend/assets/images/ad/ad-2.jpg') }}" alt="ad"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ALL POST PART ENDS ======-->

    @include('frontend.body.footer')

    <!--====== GO TO TOP PART START ======-->

    <div class="go-top-area">
        <div class="go-top-wrap">
            <div class="go-top-btn-wrap">
                <div class="go-top go-top-btn">
                    <i class="fa fa-angle-double-up"></i>
                    <i class="fa fa-angle-double-up"></i>
                </div>
            </div>
        </div>
    </div>

    <!--====== GO TO TOP PART ENDS ======-->








    <!--====== PART START ======-->

    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">

                </div>
            </div>
        </div>
    </section>

    <!--====== PART ENDS ======-->


    <!--====== jquery js ======-->
    <script src="{{ asset('frontend/assets/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>


    <!--====== Bootstrap js ======-->
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>

    <!--====== nice select js ======-->
    <script src="{{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>

    <!--====== stellarnav js ======-->
    <script src="{{ asset('frontend/assets/js/stellarnav.min.js') }}"></script>

    <!--====== circle progress js ======-->
    <script src="{{ asset('frontend/assets/js/circle-progress.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>
