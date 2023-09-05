<?php

use App\Http\Controllers\Admin\{
    AuthController,
    CategoryController,
    CmsController,
    CouponController,
    NotificationController,
    TicketController,
    UserController
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

        Route::controller(CouponController::class)->group(function () {
            Route::group(['prefix' => 'coupon', 'as' => 'coupon.'], function () {
                Route::match(['get', 'post'], 'add', 'storeCoupon')->name('store');
                Route::get('list', 'listCoupon')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editCoupon')->name('edit');
                Route::get('/delete/{id}',  'deleteCoupon')->name('delete');
            });
        });

        Route::controller(CmsController::class)->group(function () {
            Route::group(['prefix' => 'cms', 'as' => 'cms.'], function () {
                Route::match(['get', 'post'], 'add', 'storeCms')->name('store');
                Route::get('list', 'listCms')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editCms')->name('edit');
                Route::get('/delete/{id}',  'deleteCms')->name('delete');
            });
        });

        Route::controller(TicketController::class)->group(function () {
            Route::group(['prefix' => 'ticket', 'as' => 'ticket.'], function () {
                Route::match(['get', 'post'], 'add', 'storeTicket')->name('store');
                Route::get('list', 'listTicket')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editTicket')->name('edit');
                Route::get('/delete/{id}',  'deleteTicket')->name('delete');
            });
        });

        Route::controller(NotificationController::class)->group(function () {
            Route::group(['prefix' => 'notification', 'as' => 'notification.'], function () {
                Route::match(['get', 'post'], 'add', 'storeNotification')->name('store');
                Route::get('list', 'listNotification')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editNotification')->name('edit');
                Route::get('/delete/{id}',  'deleteNotification')->name('delete');
            });
        });

        Route::controller(UserController::class)->group(function () {
            Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
                Route::match(['get', 'post'], 'add', 'storeUser')->name('store');
                Route::get('list', 'listUser')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editUser')->name('edit');
                Route::get('/delete/{id}',  'deleteUser')->name('delete');
            });
        });
    });
});
