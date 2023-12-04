<?php

use App\Http\Controllers\Admin\{
    AuthController,
    NotificationController,
    TicketController
};
use App\Http\Controllers\Admin\Blog\{
    BlogCategoryController,
    NewsController
};
use App\Http\Controllers\Admin\Cms\CmsController;
use App\Http\Controllers\Admin\Proxy\CategoryController;
use App\Http\Controllers\Admin\Proxy\CountryController;
use App\Http\Controllers\Admin\Proxy\CouponController;
use App\Http\Controllers\Admin\Proxy\ProxyController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Setting\PaymentTypeController;
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

        /************************ Settings Management Start ******************************/
        Route::controller(CountryController::class)->group(function () {
            Route::group(['prefix' => 'country', 'as' => 'country.'], function () {
                Route::match(['get', 'post'], 'add', 'storeCountry')->name('store');
                Route::get('list', 'listCountry')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editCountry')->name('edit');
            });
        });
        /************************ Settings Management Start ******************************/

        /************************ Settings Management Start ******************************/
        Route::controller(PaymentTypeController::class)->group(function () {
            Route::group(['prefix' => 'paytype', 'as' => 'paytype.'], function () {
                Route::match(['get', 'post'], 'add', 'storePayType')->name('store');
                Route::get('list', 'listPayType')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editPayType')->name('edit');
            });
        });
        /************************ Settings Management Start ******************************/

        /************************ Blog Management Start ******************************/
        Route::controller(BlogCategoryController::class)->group(function () {
            Route::group(['prefix' => 'blog/category', 'as' => 'blog.category.'], function () {
                Route::match(['get', 'post'], 'add', 'storeCategory')->name('store');
                Route::get('list', 'listCategory')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editCategory')->name('edit');
                Route::get('/delete/{id}',  'deleteCategory')->name('delete');
            });
        });
        Route::controller(NewsController::class)->group(function () {
            Route::group(['prefix' => 'news', 'as' => 'news.'], function () {
                Route::match(['get', 'post'], 'add', 'storeNews')->name('store');
                Route::get('list', 'listNews')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editNews')->name('edit');
                Route::get('/delete/{id}',  'deleteNews')->name('delete');
            });
        });
        /************************ Blog Management Start ******************************/

        /************************ Proxy Management Start ******************************/
        Route::controller(CouponController::class)->group(function () {
            Route::group(['prefix' => 'coupon', 'as' => 'coupon.'], function () {
                Route::match(['get', 'post'], 'add', 'storeCoupon')->name('store');
                Route::get('list', 'listCoupon')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editCoupon')->name('edit');
                Route::get('/delete/{id}',  'deleteCoupon')->name('delete');
            });
        });
        Route::controller(CategoryController::class)->group(function () {
            Route::group(['prefix' => 'category', 'as' => 'category.'], function () {
                Route::match(['get', 'post'], 'add', 'storeCategory')->name('store');
                Route::get('list', 'listCategory')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editCategory')->name('edit');
                Route::get('/delete/{id}',  'deleteCategory')->name('delete');
            });
        });
        Route::controller(ProxyController::class)->group(function () {
            Route::group(['prefix' => 'proxy', 'as' => 'proxy.'], function () {
                Route::match(['get', 'post'], 'add', 'storeProxy')->name('store');
                Route::get('list', 'listProxy')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editProxy')->name('edit');
                Route::get('/delete/{id}',  'deleteProxy')->name('delete');
            });
        });
        /************************ Proxy Management End ******************************/

        /************************ User Management Start ******************************/
        Route::controller(UserController::class)->group(function () {
            Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
                Route::match(['get', 'post'], 'add', 'storeUser')->name('store');
                Route::get('list', 'listUser')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editUser')->name('edit');
                Route::get('/delete/{id}',  'deleteUser')->name('delete');
            });
        });
        /************************ User Management Start ******************************/

        /************************ Order Management Start ******************************/
        Route::controller(UserController::class)->group(function () {
            Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
                Route::match(['get', 'post'], 'add', 'storeUser')->name('store');
                Route::get('list', 'listUser')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editUser')->name('edit');
                Route::get('/delete/{id}',  'deleteUser')->name('delete');
            });
        });
        /************************ Order Management Start ******************************/

        /************************ CMS Management Start ******************************/
        Route::controller(CmsController::class)->group(function () {
            Route::group(['prefix' => 'cms', 'as' => 'cms.'], function () {
                Route::match(['get', 'post'], 'add', 'storeCms')->name('store');
                Route::get('list', 'listCms')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editCms')->name('edit');
                Route::get('/delete/{id}',  'deleteCms')->name('delete');
            });
        });
        /************************ CMS Management Start ******************************/

        /************************ Ticket Management Start ******************************/
        Route::controller(TicketController::class)->group(function () {
            Route::group(['prefix' => 'ticket', 'as' => 'ticket.'], function () {
                Route::match(['get', 'post'], 'add', 'storeTicket')->name('store');
                Route::get('list', 'listTicket')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editTicket')->name('edit');
                Route::get('/delete/{id}',  'deleteTicket')->name('delete');
            });
        });
        /************************ Ticket Management Start ******************************/

        /************************ Notification Management Start ******************************/
        Route::controller(NotificationController::class)->group(function () {
            Route::group(['prefix' => 'notification', 'as' => 'notification.'], function () {
                Route::match(['get', 'post'], 'add', 'storeNotification')->name('store');
                Route::get('list', 'listNotification')->name('list');
                Route::match(['GET', 'POST'], '/edit/{id}', 'editNotification')->name('edit');
                Route::get('/delete/{id}',  'deleteNotification')->name('delete');
            });
        });
        /************************ Notification Management Start ******************************/
    });
});
