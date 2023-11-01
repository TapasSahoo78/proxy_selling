<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

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

// Route::get('/', function () {
//     return redirect()->route('admin.login');
// })->where('any', '.*');

Route::get('/', function () {
    return view('user.pages.homepage');
})->name('homepage');

Route::get('/contact-us', function () {
    return view('user.pages.include.contact_us');
})->name('contact_us');

Route::get('/proxies', function () {
    return view('user.pages.services.proxy.proxies');
})->name('proxies');

Route::get('/blog', function () {
    return view('user.pages.services.blog.blog');
})->name('blog');

Route::get('/news-single', function () {
    return View('user.pages.services.blog.news_single');
})->name('news_single');

Route::get('/faq', function () {
    return view('user.pages.include.faq');
})->name('faq');

Route::get('/term-condition', function () {
    return view('user.pages.include.term_condition');
})->name('term.condition');

Route::get('/privacy-policy', function () {
    return view('user.pages.include.privacy_policy');
})->name('privacy.policy');

Route::get('/proxy-checker', function () {
    return view('user.pages.services.proxy.proxy_checker');
})->name('proxy.checker');
