<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use Illuminate\Pagination\Paginator;

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
        // Paginator::useBootstrap();
        // Paginator::defaultView('pagination::default');
        // Paginator::defaultView('pagination::simple-bootstrap-4');
        // Paginator::defaultView('pagination::bootstrap-5');
    }
}
