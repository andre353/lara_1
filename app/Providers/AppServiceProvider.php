<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
// use Illuminate\Pagination\Paginator;
use Illuminate\Database\Eloquent\Model;

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
        // Model::unguard();

        // Model::preventLazyLoading();
        // Gate::define('edit-job', function (User $user, Job $job){
        //     return $job->employer->user->is($user);
        // });
    }
}
