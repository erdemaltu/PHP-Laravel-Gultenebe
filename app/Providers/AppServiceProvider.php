<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\Frontend\HomeController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (!app()->runningInConsole() && !app()->runningUnitTests() && $this->isFrontendRoute()) {
            View::composer('*', function ($view) {
                $services = \App\Http\Controllers\Frontend\HomeController::getServicesWithSubServices();
                $view->with('services', $services);
            });
        }
    }

        private function isFrontendRoute()
    {
        return !request()->is('admin*'); 
    }
}
