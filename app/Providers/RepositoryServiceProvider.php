<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\Auth\AuthContract;
use App\Repositories\Contracts\Admin\{
    CategoryContract,
    CmsContract,
    CouponContract,
    NotificationContract,
    TicketContract,
    UserContract
};
use App\Repositories\Services\Auth\AuthService;
use App\Repositories\Services\Admin\{
    CategoryService,
    CmsService,
    CouponService,
    NotificationService,
    TicketService,
    UserService
};


class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        AuthContract::class => AuthService::class,
        CategoryContract::class  => CategoryService::class,
        CouponContract::class => CouponService::class,
        CmsContract::class  => CmsService::class,
        TicketContract::class  => TicketService::class,
        NotificationContract::class  => NotificationService::class,
        UserContract::class  => UserService::class
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
