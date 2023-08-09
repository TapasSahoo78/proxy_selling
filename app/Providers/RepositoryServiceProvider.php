<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\Auth\AuthContract;
use App\Repositories\Contracts\Admin\{
    EmployerContract
};
use App\Repositories\Services\Auth\AuthService;
use App\Repositories\Services\Admin\{
    EmployerService
};


class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        AuthContract::class => AuthService::class,
        EmployerContract::class  => EmployerService::class
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
