<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Providers\Auth;
use App\Course;
use App\User;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        $courses = Course::all();
        view()->share('courses', $courses);
        view()->composer('*', function($view) {
            $view->with('check_user',Auth::user());
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
