<?php

use Illuminate\Support\Facades\Route;

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
    return view('user.pages.services.proxies');
})->name('proxies');

Route::get('/blog', function () {
    return view('user.pages.services.blog');
})->name('blog');

Route::get('/faq', function () {
    return view('user.pages.include.faq');
})->name('faq');
