<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\{
    EmployerController,
    EmpManagerController
};
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::group(['namespace' => 'Admin', 'as' => 'admin.'], function () {

    Route::controller(AuthController::class)->group(function () {
        Route::get('signin', 'showAdminLoginForm')->name('login');
        Route::post('signin', 'adminLogin')->name('login.post');
        Route::get('forgot-password' , 'showAdminForgotPasswordForm')->name('forgot.password');
    });

    Route::group(['middleware' => 'CheckAdmin', 'preventBackHistory'], function () {

        Route::controller(AuthController::class)->group(function () {
            Route::get('logout', 'logout')->name('logout');

        });

        Route::get('dashboard', function () {
            return view('admin.pages.dashboard');
        })->name('dashboard');

        Route::controller(EmployerController::class)->group(function () {
            Route::match(['get', 'post'], 'add-employer', 'storeBusinessData')->name('store.employer');
            Route::get('c', 'listBusinessForm')->name('list.employer');
        });

        Route::controller(EmpManagerController::class)->group(function () {
            Route::get('add-employee-manager', 'showEmpManager')->name('add.empmanager');
            Route::get('list-employee-manager', 'listEmpManager')->name('list.empmanager');
        });
    });
});
