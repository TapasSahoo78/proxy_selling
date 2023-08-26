<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\{
    CategoryController
};
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::controller(AuthController::class)->group(function () {
        Route::get('signin', 'showAdminLoginForm')->name('login');
        Route::post('signin', 'adminLogin')->name('login.post');
        Route::get('forgot-password', 'showAdminForgotPasswordForm')->name('forgot.password');
    });

    Route::group(['middleware' => 'CheckAdmin', 'preventBackHistory'], function () {

        Route::controller(AuthController::class)->group(function () {
            Route::get('logout', 'logout')->name('logout');
        });

        Route::get('dashboard', function () {
            return view('admin.pages.dashboard');
        })->name('dashboard');

        Route::controller(CategoryController::class)->group(function () {
            Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
                Route::match(['get', 'post'], 'add', 'storeCategory')->name('store');
                Route::get('list', 'listCategory')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editCategory')->name('edit');
                Route::get('/delete/{id}',  'deleteCategory')->name('delete');
            });
        });
    });
});
