<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Subscriber;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubScriberController extends Controller
{
    //
    public function SubscribeNewsLetter(Request $request)
    {
       $request->validate([
        'email' => ['required', 'email', 'max:255', 'unique:subscribers,email']
       ],[
        'email.unique' => ('Email is already subscribed!')
       ]);

       $clientIP = request()->ip();

       $subscriber = new Subscriber();
       $subscriber->email = $request->email;
       $subscriber->ip_address = $clientIP;
       $subscriber->status = 1;
       $subscriber->token = Str::random(32);
       $subscriber->save();

       return response(['status' => 'success', 'message' => ('Subscribed successfully!')]);

    }
}
