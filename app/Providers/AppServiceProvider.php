<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // View:: share('name','naim khan');
//        View::composer(['front.home.home-content','front.home.home-content']or '*', function ($view){
//            $view->with('name','naim khan');
//        });
        View::composer('front.includes.header', function ($view){
           $view->with('publishedCategories',Category::where('publication_status', 1)->get());
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
