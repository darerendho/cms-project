<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Tag;
use App\Post;

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
        view()->composer('layouts.sidebar',function($view){

            $archives = Post::archives();
            $tags = Tag::has('posts')->pluck('name');

            $view->with(compact('archives','tags'));

        //  $view->with('archives', Post::archives());

         // $view->with('tags',Tag::has('posts')->pluck('name'));

        });
        //Anywhere with sidebar, archives variable required. Load the archive data

        Schema::defaultStringLength(191);
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
