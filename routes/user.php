<?php

use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
    Route::controller(AuthController::class)->group(function () {
        Route::get('signin', 'showUserLoginForm')->name('login');
        Route::post('signin', 'userLogin')->name('login.post');
        Route::get('forgot-password', 'showUserForgotPasswordForm')->name('forgot.password');
    });

    Route::group(['middleware' => 'CheckCustomer', 'preventBackHistory'], function () {

        Route::controller(AuthController::class)->group(function () {
            Route::get('logout', 'logout')->name('logout');
        });
    });
});
