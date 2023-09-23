@extends('portal-frontend.layouts.default')
@section('content')

    <!--====== POST PART START ======-->

    @php
        $news_slider = App\Models\NewsPost::where('status', 1)
            ->where('top_slider', 1)
            ->with('media')
            ->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->limit(7)
            ->get();
    @endphp
    <div class="post-area">
        <div class="container">
            <div class="row post-slider">

                @foreach ($news_slider as $slider)
                    <div class="col-lg-4">
                        <div class="single__post">
                            <div class="post-thumb">
                                <img src="{{ $slider->getFirstMediaUrl('slider', 'post-slider-image') }}"
                                    alt="{{ Str::limit(GoogleTranslate::trans($slider->news_title, app()->getLocale()), 40) }}">
                            </div>
                            <div class="post-content">
                                <h4 class="title"><a
                                        href="{{ url('news/details/' . $slider->id . '/' . $slider->news_title_slug) }}">{{ Str::limit(GoogleTranslate::trans($slider->news_title, app()->getLocale()), 40) }}</a>
                                </h4>
                                <p>{{ Str::limit(GoogleTranslate::trans($slider->news_details, app()->getLocale()), 30) }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
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
                                <h2 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its
                                        luck running out?</a></h2>
                                <p>The property, complete with a 30-seat screening room, a 100-seat amphitheater and a
                                    swimming pond with sandy beach and outdoor shower…</p>
                            </div>
                            <div class="post_play_btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=4mGyYNuG6us" a><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="post_gallery_inner_slider">
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-1.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-4.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-5.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-6.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-7.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img src="{{ asset('frontend/') }}/assets/images/gallery-post/item-4.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post_gallery_sidebar">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">TRENDY</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">LATEST</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">POPULAR</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="post_gallery_items">

                                    @foreach ($trendy_news_post as $item)
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ $item->getFirstMediaUrl('slider', 'gallery_item_thumb') }}"
                                                    alt="gallery">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a
                                                            href="{{ url('news/details/' . $item->id . '/' . $item->news_title_slug) }}">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>{{ $item->created_at->format('l M d Y') }}</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a
                                                        href="{{ url('news/details/' . $item->id . '/' . $item->news_title_slug) }}">{{ Str::limit(GoogleTranslate::trans($item->news_title, app()->getLocale()), 40) }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="post_gallery_items">

                                    @foreach ($latest_news_post as $item)
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ $item->getFirstMediaUrl('slider', 'gallery_item_thumb') }}"
                                                    alt="gallery">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a
                                                            href="{{ url('news/details/' . $item->id . '/' . $item->news_title_slug) }}">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>{{ $item->created_at->format('l M d Y') }}</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a
                                                        href="{{ url('news/details/' . $item->id . '/' . $item->news_title_slug) }}">{{ Str::limit(GoogleTranslate::trans($item->news_title, app()->getLocale()), 40) }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="post_gallery_items">

                                    @foreach ($news_post_popular as $item)
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ $item->getFirstMediaUrl('slider', 'gallery_item_thumb') }}"
                                                    alt="gallery">
                                            </div>
                                            <div class="gallery_item_content">
                                                <div class="post-meta">
                                                    <div class="meta-categories">
                                                        <a href=<a
                                                            href="{{ url('news/details/' . $item->id . '/' . $item->news_title_slug) }}">TECHNOLOGY</a>
                                                    </div>
                                                    <div class="meta-date">
                                                        <span>{{ $item->created_at->format('l M d Y') }}</span>
                                                    </div>
                                                </div>
                                                <h4 class="title"><a
                                                        href="{{ url('news/details/' . $item->id . '/' . $item->news_title_slug) }}">{{ Str::limit(GoogleTranslate::trans($item->news_title, app()->getLocale()), 40) }}</a>
                                                </h4>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== POST GALLERY PART ENDS ======-->

    <!--====== FEATURE PART START ======-->

    @php
        $news_features = App\Models\NewsPost::where('status', 1)
            ->where('top_slider', 1)
            ->with('media')
            ->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->orderBy('view_count', 'desc')
            ->limit(5)
            ->get();
    @endphp

    <section class="feature-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h3 class="title">Feature News</h3>
                    </div>
                </div>
            </div>
            <div class="row feature-post-slider">
                @foreach ($news_features as $slider)
                    <div class="col-lg-3">
                        <div class="feature-post">
                            <div class="feature-post-thumb">
                                <img src="{{ $slider->getFirstMediaUrl('slider', 'feature-post-thumb-big') }}"
                                    alt="feature">
                            </div>
                            <div class="feature-post-content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>{{ $slider->created_at->format('M d, Y') }}</span>
                                    </div>
                                </div>
                                <h4 class="title"><a
                                        href="{{ url('news/details/' . $slider->id . '/' . $slider->news_title_slug) }}">{{ Str::limit(GoogleTranslate::trans($slider->news_title, app()->getLocale()), 40) }}</a>
                                </h4>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <!--====== FEATURE PART ENDS ======-->


    <!--====== TRENDING NEWS PART START ======-->

    <section class="trending-news-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title">
                        <h3 class="title">Trending News</h3>
                    </div>
                    <div class="row trending-news-slider">
                        <div class="col-lg-6">
                            <div class="trending-news-item">
                                <div class="trending-news-thumb">
                                    <img src="{{ asset('frontend/') }}/assets/images/trending-news-1.jpg" alt="trending">
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
                                    <h3 class="title"><a href="#">There may be no consoles in the future ea exec
                                            says</a></h3>
                                    <p class="text">The property, complete with 30-seat screening from room, a 100-seat
                                        amphitheater and a swimming pond with sandy shower…</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="trending-news-item">
                                <div class="trending-news-thumb">
                                    <img src="{{ asset('frontend/') }}/assets/images/trending-news-2.jpg" alt="trending">
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
                                    <h3 class="title"><a href="#">Japan’s virus success has puzzled the world. Is
                                            its luck running out?</a></h3>
                                    <p class="text">The property, complete with 30-seat screening from room, a 100-seat
                                        amphitheater and a swimming pond with sandy shower…</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="trending-news-item">
                                <div class="trending-news-thumb">
                                    <img src="{{ asset('frontend/') }}/assets/images/trending-news-3.jpg" alt="trending">
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
                                    <h3 class="title"><a href="#">Japan’s virus success has puzzled the world. Is
                                            its luck running out?</a></h3>
                                    <p class="text">The property, complete with 30-seat screening from room, a 100-seat
                                        amphitheater and a swimming pond with sandy shower…</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="trending-news-post-items">
                                <div class="gallery_item">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/gallery-1.jpg" alt="gallery">
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
                                        <h4 class="title"><a href="#">Nancy zhang a chinese busy woman and
                                                dhaka</a></h4>
                                    </div>
                                </div>
                                <div class="gallery_item">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/gallery-2.jpg" alt="gallery">
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
                                        <h4 class="title"><a href="#">The billionaire Philan thropist read to
                                                learn</a></h4>
                                    </div>
                                </div>
                                <div class="gallery_item">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/gallery-3.jpg" alt="gallery">
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
                                        <h4 class="title"><a href="#">Cheap smartphone sensor could help you old
                                                food safe</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="trending-news-post-items">
                                <div class="gallery_item">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/gallery-1.jpg" alt="gallery">
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
                                        <h4 class="title"><a href="#">Nancy zhang a chinese busy woman and
                                                dhaka</a></h4>
                                    </div>
                                </div>
                                <div class="gallery_item">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/gallery-2.jpg" alt="gallery">
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
                                        <h4 class="title"><a href="#">The billionaire Philan thropist read to
                                                learn</a></h4>
                                    </div>
                                </div>
                                <div class="gallery_item">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/gallery-3.jpg" alt="gallery">
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
                                        <h4 class="title"><a href="#">Cheap smartphone sensor could help you old
                                                food safe</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trending-right-sidebar">
                        <div class="trending-social">
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


                        @php
                            $most_view = App\Models\NewsPost::where('status', 1)
                                ->where('top_slider', 1)
                                ->with('media')
                                ->withWhereHas('media', function ($query) {
                                    $query->where('collection_name', '=', 'slider');
                                })
                                ->orderBy('view_count', 'asc')
                                ->limit(6)
                                ->get();
                        @endphp

                        <div class="trending-most-view mt-25">
                            <div class="section-title">
                                <h3 class="title">Most View</h3>
                            </div>
                        </div>
                        <div class="trending-sidebar-slider">
                            <div class="post_gallery_items">


                                @foreach ($most_view as $key => $slider)
                                    <div class="gallery_item gallery_item-style-2">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ $slider->getFirstMediaUrl('slider', 'post-slider-image') }}"
                                                alt="gallery">
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
                                            <h4 class="title"><a href="#">Nancy zhang a chinese busy woman and
                                                    dhaka</a></h4>
                                            <span>{{ $key + 1 }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                            <div class="post_gallery_items">
                                <div class="gallery_item gallery_item-style-2">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/most-post/most-1.jpg"
                                            alt="gallery">
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
                                        <h4 class="title"><a href="#">Nancy zhang a chinese busy woman and
                                                dhaka</a></h4>
                                        <span>1</span>
                                    </div>
                                </div>
                                <div class="gallery_item gallery_item-style-2">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/most-post/most-2.jpg"
                                            alt="gallery">
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
                                        <h4 class="title"><a href="#">The billionaire Philan thropist read to
                                                learn</a></h4>
                                        <span>2</span>
                                    </div>
                                </div>
                                <div class="gallery_item gallery_item-style-2">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/most-post/most-3.jpg"
                                            alt="gallery">
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
                                        <h4 class="title"><a href="#">Cheap smartphone sensor could help you old
                                                food safe</a></h4>
                                        <span>3</span>
                                    </div>
                                </div>
                                <div class="gallery_item gallery_item-style-2">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/most-post/most-4.jpg"
                                            alt="gallery">
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
                                        <h4 class="title"><a href="#">Class property employ ancho red multi</a>
                                        </h4>
                                        <span>4</span>
                                    </div>
                                </div>
                                <div class="gallery_item gallery_item-style-2">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/most-post/most-5.jpg"
                                            alt="gallery">
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
                                        <h4 class="title"><a href="#">Best garden wing supplies for the horticu
                                                ltural</a></h4>
                                        <span>5</span>
                                    </div>
                                </div>
                                <div class="gallery_item gallery_item-style-2">
                                    <div class="gallery_item_thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/most-post/most-6.jpg"
                                            alt="gallery">
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
                                        <h4 class="title"><a href="#">Ratiffe to be Director of nation talent Trump
                                                ignored</a></h4>
                                        <span>6</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== TRENDING NEWS PART ENDS ======-->

    <!--====== SINGLE PLAY POST PART START ======-->

    <section class="single-play-post-area mt-10">
        <div class="container custom-container">
            <div class="single-play-box">
                <div class="row single-play-post-slider">
                    <div class="col-lg-6">
                        <div class="single-play-post-item">
                            <img src="{{ asset('frontend/') }}/assets/images/play-post-1.jpg" alt="play">
                            <div class="single-play-post-content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h3 class="title"><a href="#">Success is not a good food failure makes you
                                        humble</a></h3>
                            </div>
                            <div class="play-btn">
                                <a class="video-popup" href="https://www.youtube.com/watch?v=HalMzk1FFM0"><i
                                        class="fas fa-play"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-play-post-item">
                            <img src="{{ asset('frontend/') }}/assets/images/play-post-2.jpg" alt="play">
                            <div class="single-play-post-content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h3 class="title"><a href="#">Success is not a good food failure makes you
                                        humble</a></h3>
                            </div>
                            <div class="trending-btn">
                                <a href="#"><i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-play-post-item">
                            <img src="{{ asset('frontend/') }}/assets/images/play-post-2.jpg" alt="play">
                            <div class="single-play-post-content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h3 class="title"><a href="#">Success is not a good food failure makes you
                                        humble</a></h3>
                            </div>
                            <div class="trending-btn">
                                <a href="#"><i class="fas fa-bolt"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== SINGLE PLAY POST PART ENDS ======-->

    <!--====== VIDEO NEWS PART START ======-->

    <section class="video-news-area">
        <div class="container custom-container">
            <div class="video-news-box">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="video-news-post">
                            <div class="section-title section-title-2">
                                <h3 class="title">Videos News</h3>
                            </div>
                            <div class="video-news-post-item">
                                <div class="video-news-post-thumb">
                                    <img src="{{ asset('frontend/') }}/assets/images/video-post-thumb.jpg"
                                        alt="">
                                    <div class="play-btn">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=HalMzk1FFM0"><i
                                                class="fab fa-youtube"></i></a>
                                    </div>
                                </div>
                                <div class="video-news-post-content">
                                    <div class="post-meta">
                                        <div class="meta-categories">
                                            <a href="#">TECHNOLOGY</a>
                                        </div>
                                        <div class="meta-date">
                                            <span>March 26, 2020</span>
                                        </div>
                                    </div>
                                    <h3 class="title"><a href="#">Riots Report Shows London Needs To Maintain
                                            Police Numbers, Says Mayor</a></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="populer-post">
                            <div class="section-title">
                                <h3 class="title">Papular</h3>
                            </div>
                            <div class="trending-sidebar-slider">
                                <div class="populer-post-slider">
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-1.jpg"
                                                alt="populer">
                                            <span>1</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">The property complete with a 30 seat
                                                    screen room.</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-2.jpg"
                                                alt="populer">
                                            <span>2</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">Cheap smartphone sensor could help you
                                                    old.</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-3.jpg"
                                                alt="populer">
                                            <span>3</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">Harbour amid a Slowen the down in singer
                                                    city</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-4.jpg"
                                                alt="populer">
                                            <span>4</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">The secret to moving this from sphinx
                                                    screening</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-5.jpg"
                                                alt="populer">
                                            <span>5</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">The secret to moving this is sphinx
                                                    screening</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="populer-post-slider">
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-1.jpg"
                                                alt="populer">
                                            <span>1</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">The property complete with a 30 seat
                                                    screen room.</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-2.jpg"
                                                alt="populer">
                                            <span>2</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">Cheap smartphone sensor could help you
                                                    old.</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-3.jpg"
                                                alt="populer">
                                            <span>3</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">Harbour amid a Slowen the down in singer
                                                    city</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-4.jpg"
                                                alt="populer">
                                            <span>4</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">The secret to moving this from sphinx
                                                    screening</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                    <div class="gallery_item populer_item-style">
                                        <div class="gallery_item_thumb">
                                            <img src="{{ asset('frontend/') }}/assets/images/populer/populer-post-5.jpg"
                                                alt="populer">
                                            <span>5</span>
                                        </div>
                                        <div class="gallery_item_content">
                                            <h4 class="title"><a href="#">The secret to moving this is sphinx
                                                    screening</a></h4>
                                            <span>TECHNOLOGY</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== VIDEO NEWS PART ENDS ======-->

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
                                        <img src="{{ asset('frontend/') }}/assets/images/entertainment-1.jpg"
                                            alt="trending">
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
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea
                                                exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a
                                            100-seat amphitheater and a swimming pond with sandy shower…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-news-item mb-30">
                                    <div class="trending-news-thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/entertainment-2.jpg"
                                            alt="trending">
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
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea
                                                exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a
                                            100-seat amphitheater and a swimming pond with sandy shower…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-news-item mb-30">
                                    <div class="trending-news-thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/entertainment-3.jpg"
                                            alt="trending">
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
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea
                                                exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a
                                            100-seat amphitheater and a swimming pond with sandy shower…</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-news-item mb-30">
                                    <div class="trending-news-thumb">
                                        <img src="{{ asset('frontend/') }}/assets/images/entertainment-4.jpg"
                                            alt="trending">
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
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea
                                                exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a
                                            100-seat amphitheater and a swimming pond with sandy shower…</p>
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
                                        <img src="{{ asset('frontend/') }}/assets/images/sports-news.jpg" alt="sports">
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
                                        <h3 class="title"><a href="#">There may be no consoles in the future ea
                                                exec says</a></h3>
                                        <p class="text">The property, complete with 30-seat screening from room, a
                                            100-seat amphitheater and a swimming pond with sandy shower…</p>
                                        <a href="#">Read more</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="trending-sidebar-slider">
                                    <div class="post_gallery_items">
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-1.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">Copa America: Luis Suarez from
                                                        devastated US</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-2.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">Nancy Zhang a Chinese busy woman and
                                                        Dhaka</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-3.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">U.S. Response subash says he will
                                                        label regions by risk of…</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-4.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">Venezuela elan govt and opposit the
                                                        property collect</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-5.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">Cheap smartphone sensor could help
                                                        you old food safe</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post_gallery_items">
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-1.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">Copa America: Luis Suarez from
                                                        devastated US</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-2.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">Nancy Zhang a Chinese busy woman and
                                                        Dhaka</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-3.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">U.S. Response subash says he will
                                                        label regions by risk of…</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-4.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">Venezuela elan govt and opposit the
                                                        property collect</a></h4>
                                            </div>
                                        </div>
                                        <div class="gallery_item">
                                            <div class="gallery_item_thumb">
                                                <img src="{{ asset('frontend/') }}/assets/images/sports/sports-5.jpg"
                                                    alt="sports">
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
                                                <h4 class="title"><a href="#">Cheap smartphone sensor could help
                                                        you old food safe</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="post-add mt-30">
                        <a href="#"><img src="{{ asset('frontend/') }}/assets/images/ad/ad-1.png"
                                alt="ad"></a>
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
                                            <img src="{{ asset('frontend/') }}/assets/images/business-1.jpg"
                                                alt="business">
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
                                                <h3 class="title"><a href="#">There may be no consoles in the
                                                        future ea exec says</a></h3>
                                                <p class="text">The property, complete with 30-seat screening from room,
                                                    a 100-seat amphitheater and a swimming pond with sandy shower…</p>
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
                                            <img src="{{ asset('frontend/') }}/assets/images/business-2.jpg"
                                                alt="business">
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
                                                <h3 class="title"><a href="#">There may be no consoles in the
                                                        future ea exec says</a></h3>
                                                <p class="text">The property, complete with 30-seat screening from room,
                                                    a 100-seat amphitheater and a swimming pond with sandy shower…</p>
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
                                            <img src="{{ asset('frontend/') }}/assets/images/business-3.jpg"
                                                alt="business">
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
                                                <h3 class="title"><a href="#">There may be no consoles in the
                                                        future ea exec says</a></h3>
                                                <p class="text">The property, complete with 30-seat screening from room,
                                                    a 100-seat amphitheater and a swimming pond with sandy shower…</p>
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
                                            <img src="{{ asset('frontend/') }}/assets/images/business-4.jpg"
                                                alt="business">
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
                                                <h3 class="title"><a href="#">There may be no consoles in the
                                                        future ea exec says</a></h3>
                                                <p class="text">The property, complete with 30-seat screening from room,
                                                    a 100-seat amphitheater and a swimming pond with sandy shower…</p>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                    <h3 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a>
                                    </h3>
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
                                        <img src="{{ asset('frontend/') }}/assets/images/flag/flag-1.png"
                                            alt="flag">
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
                                        <img src="{{ asset('frontend/') }}/assets/images/flag/flag-2.png"
                                            alt="flag">
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
                                        <img src="{{ asset('frontend/') }}/assets/images/flag/flag-3.png"
                                            alt="flag">
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
                                        <img src="{{ asset('frontend/') }}/assets/images/flag/flag-4.png"
                                            alt="flag">
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
                                        <img src="{{ asset('frontend/') }}/assets/images/flag/flag-5.png"
                                            alt="flag">
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
                            <form action="" class="newsletter-form">
                                @csrf
                                <div class="input-box">
                                    <input type="text" class="form-control" name="email"
                                        placeholder="Your email address">
                                    <div class="input-group-append">
                                        <button class="newsletter-button" type="submit">SIGN UP</button>
                                    </div>
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
                                    <img src="{{ asset('frontend/') }}/assets/images/categories-1.jpg"
                                        alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Restaurant</span>
                                            <img src="{{ asset('frontend/') }}/assets/images/arrow.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}/assets/images/categories-2.jpg"
                                        alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Entertainment</span>
                                            <img src="{{ asset('frontend/') }}/assets/images/arrow.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}/assets/images/categories-3.jpg"
                                        alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Financial</span>
                                            <img src="{{ asset('frontend/') }}/assets/images/arrow.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}/assets/images/categories-4.jpg"
                                        alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Business</span>
                                            <img src="{{ asset('frontend/') }}/assets/images/arrow.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}/assets/images/categories-5.jpg"
                                        alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>Scientists</span>
                                            <img src="{{ asset('frontend/') }}/assets/images/arrow.svg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('frontend/') }}/assets/images/categories-6.jpg"
                                        alt="categories">
                                    <div class="Categories-content">
                                        <a href="#">
                                            <span>International’s</span>
                                            <img src="{{ asset('frontend/') }}/assets/images/arrow.svg"
                                                alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-add pt-35">
                                <a href="#"><img src="{{ asset('frontend/') }}/assets/images/ad/ad-2.jpg"
                                        alt="ad"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ALL POST PART ENDS ======-->
@stop
