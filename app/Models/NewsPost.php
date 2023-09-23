<?php

namespace App\Models;


use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class NewsPost extends Model implements HasMedia

{
    use HasFactory;
    use SoftDeletes;

    use InteractsWithMedia;

    protected $guarded = [];




    public function registerMediaConversions(Media $media = null): void
    {

        $this->addMediaConversion('feature-post-thumb')
              ->performOnCollections('slider')
              ->width(255)
              ->height(320)
              ->sharpen(10)
              ->nonQueued();

        $this->addMediaConversion('trending-news-thumb')
              ->performOnCollections('slider')
              ->width(350)
              ->height(250)
              ->sharpen(10)
              ->withResponsiveImages()
              ->nonQueued();

        $this->addMediaConversion('post_gallery_slider')
              ->performOnCollections('slider')
              ->width(730)
              ->height(500)
              ->sharpen(10)
              ->nonQueued();

        $this->addMediaConversion('feature-post-thumb-big')
              ->performOnCollections('slider')
              ->fit(Manipulations::FIT_CROP, 255, 320)
              ->sharpen(10)
              ->nonQueued();

        $this->addMediaConversion('cat-news-thumb')
              ->performOnCollections('slider')
              ->fit(Manipulations::FIT_CROP, 258, 250)
              ->sharpen(10)
              ->nonQueued();

        $this->addMediaConversion('post-detail-thumb')
              ->performOnCollections('slider')
              ->fit(Manipulations::FIT_CROP, 730, 450)
              ->sharpen(10)
              ->nonQueued();

        $this->addMediaConversion('post-slider-image')
              ->performOnCollections('slider')
              ->crop('crop-center', 80, 70) // Trim or crop the image to the center for specified width and height.
              ->sharpen(10)
              ->nonQueued();

        $this->addMediaConversion('gallery_item_thumb')
              ->performOnCollections('slider')
              ->crop('crop-center', 100, 77) // Trim or crop the image to the center for specified width and height.
              ->sharpen(10)
              ->nonQueued();


    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');

    }



}
