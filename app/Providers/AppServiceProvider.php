<?php

namespace App\Providers;

use App\Models\Category;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Paginator::useBootstrap();
        Gate::before(function ($user, $ability) {
            return $user->hasRole('super admin') ? true : null;
        });

        View::composer('layouts.base', function ($view) {
            $categories = Category::where('status', 'active')->get(['name','slug','image']);
            $view->with(['categories' => $categories]);
        });
    }
}
