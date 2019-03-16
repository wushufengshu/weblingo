<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use \App\Course;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);

        view()->composer(['admin.layouts.sidebar','admin.dashboard.index','admin.course.index'], function($view){
            $view->with('archives', \App\Course::archives());
        });

         view()->composer(['admin.course.index'], function($view){
            $view->with('courses', \App\Course::all());
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
