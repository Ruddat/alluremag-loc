<!--====== FEATURE PART START ======-->

@php
$news_features = App\Models\NewsPost::where('status',1)->where('top_slider',1)->with('media')->withWhereHas('media', function ($query) {
        $query->where('collection_name', '=', 'slider');
    })
    ->orderBy('view_count', 'desc')
    ->limit(5)
    ->get();



//dd($news_slider);
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





            @foreach($news_features as $slider )
            <div class="col-lg-3">
                <div class="feature-post">
                    <div class="feature-post-thumb">
                        <img src="{{$slider->getFirstMediaUrl('slider', 'feature-post-thumb-big')}}" alt="feature">
                    </div>
                    <div class="feature-post-content">
                        <div class="post-meta">
                            <div class="meta-categories">
                                <a href="#">TECHNOLOGY</a>


                            </div>
                            <div class="meta-date">
                                <span>{{ $slider->created_at->format("M d, Y")}}</span>
                            </div>
                        </div>
                        <h4 class="title"><a href="{{ url('news/details/'.$slider->id.'/'.$slider->news_title_slug) }}">{{ Str::limit(GoogleTranslate::trans($slider->news_title, app()->getLocale()), 40) }}</a></h4>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

<!--====== FEATURE PART ENDS ======-->
