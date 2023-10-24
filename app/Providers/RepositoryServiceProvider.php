<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\Auth\AuthContract;
use App\Repositories\Contracts\Admin\{
    NotificationContract,
    TicketContract
};
use App\Repositories\Contracts\Admin\Blog\BlogCategoryContract;
use App\Repositories\Contracts\Admin\Blog\NewsContract;
use App\Repositories\Contracts\Admin\Cms\CmsContract;
use App\Repositories\Contracts\Admin\Proxy\CategoryContract;
use App\Repositories\Contracts\Admin\Proxy\CouponContract;
use App\Repositories\Contracts\Admin\User\UserContract;
use App\Repositories\Services\Auth\AuthService;
use App\Repositories\Services\Admin\{
    NotificationService,
    TicketService
};
use App\Repositories\Services\Admin\Blog\BlogCategoryService;
use App\Repositories\Services\Admin\Blog\NewsService;
use App\Repositories\Services\Admin\Cms\CmsService;
use App\Repositories\Services\Admin\Proxy\CategoryService;
use App\Repositories\Services\Admin\Proxy\CouponService;
use App\Repositories\Services\Admin\User\UserService;

class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        AuthContract::class => AuthService::class,
        CategoryContract::class  => CategoryService::class,
        CouponContract::class => CouponService::class,
        CmsContract::class  => CmsService::class,
        TicketContract::class  => TicketService::class,
        NotificationContract::class  => NotificationService::class,
        UserContract::class  => UserService::class,

        BlogCategoryContract::class  => BlogCategoryService::class,
        NewsContract::class  => NewsService::class
    ];
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation) {
            $this->app->bind($interface, $implementation);
        }
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
