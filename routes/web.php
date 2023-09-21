<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\IndexController;
use App\Http\Controllers\Frontend\SubScriberController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});


/** Links */
Route::get('/', [IndexController::class, 'index']);
Route::get('/contact-us', [IndexController::class, 'contactUs'])->name('contact-us');
Route::get('/about-us', [IndexController::class, 'aboutUs'])->name('about-us');



/** Newsletter Routes */
Route::post('subscribe-newsletter', [SubScriberController::class, 'SubscribeNewsLetter'])->name('subscribe-newsletter');

Route::post('contact-mail', [IndexController::class, 'handleContactFrom'])->name('contact-mail');

/** Contact Page Route */
Route::get('contact', [IndexController::class, 'contact'])->name('contact');
Route::post('contact', [IndexController::class, 'handleContactFrom'])->name('contact.submit');

Route::get('/news/details/{id}/{slug}', [IndexController::class, 'NewsDetails']);
Route::get('/news/subcategory/{id}/{slug}', [IndexController::class, 'SubCatWiseNews']);
Route::get('/news/category/{id}/{slug}', [IndexController::class, 'CatWiseNews']);
Route::get('/lang/change', [IndexController::class, 'Change'])->name('changeLang');
