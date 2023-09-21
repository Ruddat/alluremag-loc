@extends('frontend.home_dashboard')
@section('home')







    <!--====== POST LAYOUT 1 PART START ======-->

    <section class="post-layout-1-area pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-author-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Worldnews</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Health</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="post-layout-top-content">
                        <div class="post-categories d-flex justify-content-between align-content-center">
                            <div class="categories-item">
                                <span>HEALTH</span>
                            </div>
                            <div class="categories-share">
                                <ul>
                                    <li><i class="fas fa-comment"></i>45020</li>
                                    <li><i class="fas fa-fire"></i>{{ $news->view_count }}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3 class="title"> {{ (GoogleTranslate::trans($news->news_title, app()->getLocale())) }}</h3>

                            <p>{{ Str::limit(GoogleTranslate::trans($news->news_headline, app()->getLocale()), 160) }}</p>
                            <div class="thumb">
                                <img src="{{$news->getFirstMediaUrl('slider', 'post-detail-thumb')}}" alt="">

                            </div>
                        </div>
                        <div class="post-author">
                            <div class="author-info">
                                <div class="thumb">
                                    <img src="assets/images/author.png" alt="">
                                </div>
                                <h5 class="title">Subash Chandra</h5>
                                <ul>
                                    <li>March 26, 2020</li>
                                    <li>Updated 1:58 p.m. ET</li>
                                </ul>
                            </div>
                            <div class="author-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fal fa-bookmark"></i></a></li>
                                    <li><a href="#"><i class="fas fa-ellipsis-v"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="post-text mt-30">

                            {!! (GoogleTranslate::trans($news->news_details, app()->getLocale())) !!}



                        </div>


                        <div class="post-quote d-block d-md-flex align-items-center">
                            <div class="thumb">
                                <img src="assets/images/post-quote.jpg" alt="">
                            </div>
                            <div class="post-quote-content">
                                <img src="assets/images/quote-icon.png" alt="">
                                <p>I must explain to you how all this mistake idea denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure because it is pleasure.</p>
                                <div class="user">
                                    <img src="assets/images/author.png" alt="">
                                    <h5 class="title">Subash Chandra</h5>
                                    <span>Founder at Seative Digital</span>
                                </div>
                            </div>
                        </div>
                        <div class="post-text mt-35">
                            <p>The next day I came back to my team and said, This is what I just heard, we have to get ready, he said. We knew that it wasn’t going to be long before we were going to have to deal with it.</p>
                            <p>Mr. Hogan has also leaned on his wife, Yumi Hogan, a Korean immigrant, who was also at the governor’s convention, which included a dinner at the Korean ambassador’s home. As the first Korean first lady in American history, Ms. Hogan has become something of an icon in South Korea. I just grabbed my wife and said, Look, you speak Korean. You know the president. You know the first lady. You know the ambassador. Let’s talk to them in Korean, and tell them we need their help. Companies in South Korea said would tests.</p>
                            <div class="thumb pt-10 pb-35">
                                <img src="assets/images/post-thumb-4.png" alt="">
                            </div>
                            <p>In global terms the US has the most Covid-19 cases - more than 245,000. And on Thursday the US authorities said more than 1,000 had died in the past 24 hours - the highest daily toll so far in the world.</p>
                            <p>Hospitals and morgues in New York are struggling to cope with the pandemic, and New York Governor Andrew Cuomo has warned that New York risks running out of ventilators for patients in six days.</p>
                        </div>
                        <div class="post-tags">
                            <ul>
                                <li><a href="#"><i class="fas fa-tag"></i> Tags</a></li>
                                <li><a href="#">Health</a></li>
                                <li><a href="#">World</a></li>
                                <li><a href="#">Corona</a></li>
                            </ul>
                        </div>
                        <div class="post-reader-text pt-50">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="post-reader-prev">
                                        <span>PREVIOUS NEWS</span>
                                        <h4 class="title"><a href="#">Kushner puts himself in middle of white house’s chaotic coronavirus response.</a></h4>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="post-reader-prev">
                                        <span>NEXT NEWS</span>
                                        <h4 class="title"><a href="#">C.I.A. Hunts for authentic virus totals in china, dismissing government tallies</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-4">
                    <div class="post_gallery_sidebar mt-40">
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
                                            <img src="assets/images/gallery-1.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-2.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-3.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-4.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-5.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-1.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-2.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-3.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-4.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-5.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-1.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-2.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-3.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-4.jpg" alt="gallery">
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
                                            <img src="assets/images/gallery-5.jpg" alt="gallery">
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
                        <div class="trending-social mt-30">
                            <div class="section-title">
                                <h3 class="title">Follow us</h3>
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
                        <div class="trending-sidebar mt-40">
                            <div class="section-title">
                                <h3 class="title">Trending News</h3>
                            </div>
                            <div class="row trending-sidebar-slider">
                                <div class="col-lg-6">
                                    <div class="trending-news-item">
                                        <div class="trending-news-thumb">
                                            <img src="assets/images/trending-thumb.png" alt="trending">
                                            <div class="icon">
                                                <a href="#"><i class="fas fa-bolt"></i></a>
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
                                <div class="col-lg-6">
                                    <div class="trending-news-item">
                                        <div class="trending-news-thumb">
                                            <img src="assets/images/trending-news-2.jpg" alt="trending">
                                            <div class="icon">
                                                <a href="#"><i class="fas fa-bolt"></i></a>
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
                                            <h3 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h3>
                                            <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="trending-news-item">
                                        <div class="trending-news-thumb">
                                            <img src="assets/images/trending-news-3.jpg" alt="trending">
                                            <div class="icon">
                                                <a href="#"><i class="fas fa-bolt"></i></a>
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
                                            <h3 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h3>
                                            <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="trending-news-post-items">
                                <div class="gallery_item">
                                    <div class="gallery_item_thumb">
                                        <img src="assets/images/gallery-1.jpg" alt="gallery">
                                        <div class="icon"><i class="fas fa-bolt"></i></div>
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
                                        <h4 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h4>
                                    </div>
                                </div>
                                <div class="gallery_item">
                                    <div class="gallery_item_thumb">
                                        <img src="assets/images/gallery-2.jpg" alt="gallery">
                                        <div class="icon"><i class="fas fa-bolt"></i></div>
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
                                        <h4 class="title"><a href="#">The billionaire Philan thropist read to learn</a></h4>
                                    </div>
                                </div>
                                <div class="gallery_item">
                                    <div class="gallery_item_thumb">
                                        <img src="assets/images/gallery-3.jpg" alt="gallery">
                                        <div class="icon"><i class="fas fa-bolt"></i></div>
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
                        <div class="sidebar-add pt-40">
                            <a href="#"><img src="assets/images/ad/ad-2.jpg" alt="ad"></a>
                        </div>

                        <div class="most-share-post mt-40">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== POST LAYOUT 1 PART ENDS ======-->

    <!--====== LATEST NEWS PART START ======-->

    <section class="latest-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title">Our latest news</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trending-news-item mb-30">
                        <div class="trending-news-thumb">
                            <img src="assets/images/latest-news-1.png" alt="trending">
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
                <div class="col-lg-4">
                    <div class="trending-news-item mb-30">
                        <div class="trending-news-thumb">
                            <img src="assets/images/latest-news-2.png" alt="trending">
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
                <div class="col-lg-4">
                    <div class="trending-news-item mb-30">
                        <div class="trending-news-thumb">
                            <img src="assets/images/latest-news-3.png" alt="trending">
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
    </section>

    <!--====== LATEST NEWS PART ENDS ======-->

    <!--====== POST FORM PART START ======-->

    <div class="post-form-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h3 class="title">Leave an opinion</h3>
                    </div>
                    <div class="post-form-box">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" placeholder="Email address">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <textarea name="#" id="#" cols="30" rows="10" placeholder="Tell us about your opinion…"></textarea>
                                        <button class="main-btn" type="button">POST OPINION</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== POST FORM PART ENDS ======-->

    <!--====== POST COMMENTS PART START ======-->

    <section class="post-comments-area pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="section-title">
                        <h3 class="title">Post Comments</h3>
                    </div>
                    <div class="post-comments-list">
                        <div class="post-comments-item">
                            <div class="thumb">
                                <img src="assets/images/comments-1.png" alt="comments">
                            </div>
                            <div class="post">
                               <a href="#">Reply</a>
                                <h5 class="title">Subash Chandra</h5>
                                <p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
                            </div>
                        </div>
                        <div class="post-comments-item">
                            <div class="thumb">
                                <img src="assets/images/comments-2.png" alt="comments">
                            </div>
                            <div class="post">
                               <a href="#">Reply</a>
                                <h5 class="title">Subash Chandra</h5>
                                <p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
                            </div>
                        </div>
                        <div class="post-comments-item ml-30">
                            <div class="thumb">
                                <img src="assets/images/comments-3.png" alt="comments">
                            </div>
                            <div class="post">
                               <a href="#">Reply</a>
                                <h5 class="title">Subash Chandra</h5>
                                <p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
                            </div>
                        </div>
                        <div class="post-comments-item">
                            <div class="thumb">
                                <img src="assets/images/comments-4.png" alt="comments">
                            </div>
                            <div class="post">
                               <a href="#">Reply</a>
                                <h5 class="title">Subash Chandra</h5>
                                <p>We’ve invested every aspect of how we serve our users over the past Pellentesque rutrum ante in nulla suscipit, vel posuere leo tristique.</p>
                            </div>
                        </div>
                    </div>
                    <div class="post-load-btn">
                        <a class="main-btn" href="#">LOAD MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== POST COMMENTS PART ENDS ======-->

    <!--====== ADD PART ENDS ======-->

    <div class="add-area text-center">
        <a href="#">
            <img src="assets/images/ad/ad-1.png" alt="">
        </a>
    </div>

    <!--====== ADD PART ENDS ======-->





@endsection
