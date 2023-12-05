<?php

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ProxyController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('signin', 'showUserLoginForm')->name('login');
        Route::post('signin', 'userLogin')->name('login.post');
        Route::get('forgot-password', 'showUserForgotPasswordForm')->name('forgot.password');
    });

    Route::controller(ProxyController::class)->group(function () {
        Route::get('proxy-checker', 'getIpInformation')->name('ip.information');
    });

    Route::group(['middleware' => 'CheckCustomer', 'preventBackHistory'], function () {

        Route::controller(AuthController::class)->group(function () {
            Route::get('logout', 'logout')->name('logout');
        });
    });
});
