<?php

namespace App\Providers;

use App\AmmaStory;
use App\Homepage;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('admin.layouts.app', function($view) {
            $view->with('homepage', Homepage::first());
            $view->with('ammaStory', AmmaStory::first());
            $view->with('user', User::count());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
