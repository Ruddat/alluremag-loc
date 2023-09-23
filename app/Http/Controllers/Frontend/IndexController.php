<?php

namespace App\Http\Controllers\Frontend;

use toastr;
use Carbon\Carbon;
use App\Models\Contact;
use App\Models\Category;
use App\Models\NewsPost;
use App\Mail\ContactMail;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    //
    public function index()
    {
        $expire = Carbon::now()->addMinutes(10);



        $newnewspost = Cache::remember('NewsPost', $expire, function() {
            return NewsPost::orderBy('id','DESC')->limit(8)->get();
        });

        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(8)->get();

        $slider = Cache::remember('slider', $expire, function() {
            return NewsPost::where('slider', '=', 0)
            ->with('media')
            ->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->orderBy('updated_at', 'desc')
            ->take(7)
            ->get();
        });

        $news_post_popular = Cache::remember('news_post_popular', $expire, function() {
            return NewsPost::orderBy('visitor','DESC')
            ->with('media')
            ->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->limit(5)->get();
        });

        $latest_news_post = Cache::remember('latest_news_post', $expire, function() {
            return NewsPost::orderBy('id','DESC')
            ->with('media')
            ->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->limit(5)->get();
        });

        $trendy_news_post = Cache::remember('latest_news_post', $expire, function() {
            return NewsPost::orderBy('created_at' , 'visitor','DESC')
            ->with('media')
            ->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->limit(5)->get();
        });

       return view('portal-frontend.pages.index', [

            'slider' => $slider,
            'newnewspost' => $newnewspost,
            'newspopular' => $newspopular,
            'news_post_popular' => $news_post_popular,
            'latest_news_post' => $latest_news_post,
            'trendy_news_post' => $trendy_news_post,

        ]);



    } // End Method

    public function aboutUs()
    {
        return view('portal-frontend.pages.about-us');
    }

    public function contactUs()
    {
        return view('portal-frontend.pages.contact');
    }

    public function Change(Request $request){

        App::setLocale($request->lang);
        session()->put('locale',$request->lang);

        return redirect()->back();

    }// End MethodS

    public function NewsDetails($id,$slug){

        $expire = Carbon::now()->addMinutes(10);

        $news = NewsPost::findOrFail($id);


        $tags = $news->tags;
        $tags_all = explode(',', $tags);
        $cat_id = $news->category_id;

        $relatedNews = NewsPost::where('category_id',$cat_id)->where('id','!=',$id)->orderBy('id','DESC')->limit(6)->get();

        $newsKey = 'blog' . $news->id;
        if (!Session::has($newsKey)) {
            $news->increment('view_count');
            Session::put($newsKey,1);
        }

        $news->increment('view_count');

        $news->increment('visitor');

        //$newnewspost = NewsPost::orderBy('id','DESC')->limit(8)->get();


        $news_post_popular = Cache::remember('news_post_popular', $expire, function() {
            return NewsPost::orderBy('visitor','DESC')
            ->with('media')
            ->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->limit(5)->get();
        });

        $latest_news_post = Cache::remember('latest_news_post', $expire, function() {
            return NewsPost::orderBy('id','DESC')
            ->with('media')
            ->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->limit(5)->get();
        });

        $trendy_news_post = Cache::remember('latest_news_post', $expire, function() {
            return NewsPost::orderBy('id','visitor','DESC')
            ->with('media')
            ->withWhereHas('media', function ($query) {
                $query->where('collection_name', '=', 'slider');
            })
            ->limit(5)->get();
        });


        return view('portal-frontend.pages.post-details-1',compact('news','tags_all','relatedNews', 'trendy_news_post', 'latest_news_post','news_post_popular'));

    }// End Method


    public function CatWiseNews($id,$slug){

        $news = NewsPost::where('status',1)->where('category_id',$id)

                ->with('media')
        ->withWhereHas('media', function ($query) {
            $query->where('collection_name', '=', 'slider');
        })

        ->orderBy('id','DESC')->get();

        $breadcat = Category::where('id',$id)->first();
        $newstwo = NewsPost::where('status',1)->where('category_id',$id)->orderBy('id','DESC')->limit(2)->get();
        $newnewspost = NewsPost::orderBy('id','DESC')->limit(8)->get();
        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(5)->get();
//dd($newnewspost);
        return view('portal-frontend.pages.categorynews',compact('news','breadcat','newstwo','newnewspost','newspopular'));

    }// End Method


    public function SubCatWiseNews($id,$slug){

        $news = NewsPost::where('status',1)->where('subcategory_id',$id)
        ->with('media')
        ->withWhereHas('media', function ($query) {
            $query->where('collection_name', '=', 'slider');
        })->orderBy('id','DESC')->get();

        $breadcat = Category::where('id',$id)->first();
        $breadsubcat = Subcategory::where('id',$id)->first();

        $newstwo = NewsPost::where('status',1)->where('subcategory_id',$id)->orderBy('id','DESC')->limit(2)->get();

        $newnewspost = NewsPost::orderBy('id','DESC')->limit(8)->get();
        $newspopular = NewsPost::orderBy('view_count','DESC')->limit(8)->get();

        return view('portal-frontend.pages.subcategorynews',compact('news', 'breadcat', 'breadsubcat','newstwo','newnewspost','newspopular'));

    }// End Method


    public function contact()
    {
        //$contact = Contact::where('language', getLangauge())->first();
        //$socials = SocialLink::where('status', 1)->get();
        return view('portal-frontend.pages.contact');
    }

    public function handleContactFrom(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', 'max:255']
           ],[
            'email.unique' => ('BLA BLA BLAEmail is already subscribed!')
           ]);




            /** Send Mail */
            Mail::to('ingo.ruddat@gmail.com')->send(new ContactMail($request->subject, $request->message, $request->email));

           $clientIP = request()->ip();

           $subscriber = new Contact();
           $subscriber->email = $request->email;
         //  $subscriber->ip_address = $clientIP;
            $subscriber->address = $request->subject;
            $subscriber->language = 1;
            $subscriber->phone = 1;
         //  $subscriber->token = Str::random(32);
           $subscriber->save();




        return response(['status' => 'success', 'message' => ('Subscribed successfully!')]);



//dd($request->all());

        try{
            $toMail = Contact::where('language', 'en')->first();

            /** Send Mail */
            Mail::to('ingo.ruddat@gmail.com')->send(new ContactMail($request->subject, $request->message, $request->email));

            /** store the mail */

            $mail = new RecivedMail();
            $mail->email = $request->email;
            $mail->subject = $request->subject;
            $mail->message = $request->message;
            $mail->save();

        }catch(\Exception $e){
            toastr()->error($e->getMessage());
            return redirect()->back();
        }
        return redirect()->back();
    }

}

