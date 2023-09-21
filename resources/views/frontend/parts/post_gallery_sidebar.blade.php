<div class="col-lg-4">
    <div class="post_gallery_sidebar">
        <ul class="nav nav-pills" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">{{  GoogleTranslate::trans('TRENDY', app()->getLocale() )  }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">{{  GoogleTranslate::trans('LATEST', app()->getLocale() )  }}</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">{{  GoogleTranslate::trans('POPULAR', app()->getLocale() )  }}</a>
            </li>
        </ul>




        @php
        $news_latest = App\Models\NewsPost::where('status',1)->where('top_slider',1)->with('media')->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->orderBy('updated_at', 'desc')
            ->limit(5)
            ->get();

        $news_trends = App\Models\NewsPost::where('status',1)->where('top_slider',1)->with('media')->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->orderBy('view_count', 'desc')
            ->limit(5)
            ->get();

       //dd($news_slider);
        @endphp




        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="post_gallery_items">




                    @foreach($news_trends as $slider )
                    <div class="gallery_item">
                        <div class="gallery_item_thumb">
                                <img src="{{$slider->getFirstMediaUrl('slider', 'gallery_item_thumb')}}" alt="gallery">
                            </div>
                            <div class="gallery_item_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">{{ $slider->category_id }}TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>March 26, 2020</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="#">{{ Str::limit(GoogleTranslate::trans($slider->news_title, app()->getLocale()), 40) }}</a></h4>
                            </div>
                    </div>
                    @endforeach

                </div>
            </div>


            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="post_gallery_items">


                    @foreach($news_latest as $slider )
                    <div class="gallery_item">
                        <div class="gallery_item_thumb">
                                <img src="{{$slider->getFirstMediaUrl('slider', 'gallery_item_thumb')}}" alt="gallery">
                            </div>
                            <div class="gallery_item_content">
                                <div class="post-meta">
                                    <div class="meta-categories">
                                        <a href="#">{{ $slider->category_id }}TECHNOLOGY</a>
                                    </div>
                                    <div class="meta-date">
                                        <span>{{ $slider->created_at->format("M d, Y")}}</span>
                                    </div>
                                </div>
                                <h4 class="title"><a href="#">{{ Str::limit(GoogleTranslate::trans($slider->news_title, app()->getLocale()), 40) }}</a></h4>
                            </div>
                    </div>
                    @endforeach



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
