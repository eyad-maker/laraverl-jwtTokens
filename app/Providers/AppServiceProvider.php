<?php


namespace App\Providers;
use App\Services\AuthService;
use App\Services\LoginService;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(AuthService::class, function ($app) {
            
            return new AuthService();
        });
        $this->app->bind(LoginService::class, function ($app) {
            
            return new LoginService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
