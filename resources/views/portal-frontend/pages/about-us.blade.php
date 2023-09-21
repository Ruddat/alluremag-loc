@extends('portal-frontend.layouts.default')
@section('content')
    <!--====== ABOUT AUTHOR PART START ======-->

    <div class="about-author-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-author-content">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Author</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Subash Chandra</li>
                            </ol>
                        </nav>
                        <div class="author-content">
                            <div class="thumb">
                                <img src="{{ asset('frontend/') }}/assets/images/author.png" alt="">
                            </div>
                            <h3 class="title">Subash Chandra</h3>
                            <ul>
                                <li>News Writer</li>
                                <li><span>Since: <span>April 25, 2020</span></span></li>
                            </ul>
                            <div class="text">
                                <p>Subash Chandra is an investigative reporter for Newspark, based in Bangladesh. He started at The Times in 1999 covering Mayor Rudolph W. Giuliani and then the Sept. 11, 2001, attacks.</p>
                                <p>He is a three-time winner of the Pulitzer Prize for explanatory reporting, investigative reporting and as part of team for foreign reporting. He previously worked at The Bangladesh Post and The Hartford Courant.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== ABOUT AUTHOR PART ENDS ======-->

    <!--====== ABOUT ITEM PART START ======-->

    <section class="about-item-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="about-tab-btn mt-40">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Latest news</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Popular news</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                <div class="about-post-items">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="trending-news-item mb-30">
                                                <div class="trending-news-thumb">
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-1.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-2.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-3.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-4.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-5.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-6.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-7.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-1.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-2.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-3.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-4.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-5.jpg" alt="trending">
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
                                        <div class="col-lg-12">
                                            <div class="pagination-item">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">50</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="fas fa-caret-right"></i></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                <div class="about-post-items">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="trending-news-item mb-30">
                                                <div class="trending-news-thumb">
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-1.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-2.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-3.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-4.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-5.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-6.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-7.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-1.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-2.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-3.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-4.jpg" alt="trending">
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
                                                    <img src="{{ asset('frontend/') }}/assets/images/entertainment-dark-5.jpg" alt="trending">
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
                                        <div class="col-lg-12">
                                            <div class="pagination-item">
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">50</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                                <span aria-hidden="true"><i class="fas fa-caret-right"></i></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-1.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-2.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-3.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-4.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-5.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-1.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-2.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-3.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-4.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-5.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-1.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-2.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-3.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-4.jpg" alt="gallery">
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
                                            <img src="{{ asset('frontend/') }}/assets/images/gallery-5.jpg" alt="gallery">
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
                        <div class="trending-sidebar mt-40">
                            <div class="section-title">
                                <h3 class="title">Trending News</h3>
                            </div>
                            <div class="row trending-sidebar-slider">
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
                                            <h3 class="title"><a href="#">There may be no consoles in the future ea exec says</a></h3>
                                            <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
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
                                            <h3 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h3>
                                            <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
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
                                            <h3 class="title"><a href="#">Japan’s virus success has puzzled the world. Is its luck running out?</a></h3>
                                            <p class="text">The property, complete with 30-seat screening from room, a 100-seat amphitheater and a swimming pond with sandy shower…</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                        <h4 class="title"><a href="#">Nancy zhang a chinese busy woman and dhaka</a></h4>
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
                                        <h4 class="title"><a href="#">The billionaire Philan thropist read to learn</a></h4>
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
                                        <h4 class="title"><a href="#">Cheap smartphone sensor could help you old food safe</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-add pt-35">
                            <a href="#"><img src="{{ asset('frontend/') }}/assets/images/ad/ad-2.jpg" alt="ad"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== ABOUT ITEM PART ENDS ======-->

    <!--====== ADD PART ENDS ======-->

    <div class="add-area text-center">
        <a href="#">
            <img src="{{ asset('frontend/') }}/assets/images/ad/ad-1.png" alt="">
        </a>
    </div>

    <!--====== ADD PART ENDS ======-->
@stop
