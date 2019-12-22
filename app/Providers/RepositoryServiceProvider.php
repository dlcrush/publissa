<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Contracts\SiteRepository', function($app) {
            return new \App\Repositories\SiteRepository($this->app, $app->make('Illuminate\Support\Collection'));
        });

        $this->app->bind('App\Repositories\Contracts\PostRepository', function($app) {
            return new \App\Repositories\PostRepository($this->app, $app->make('Illuminate\Support\Collection'));
        });

        $this->app->bind('App\Repositories\Contracts\CategoryRepository', function($app) {
            return new \App\Repositories\CategoryRepository($this->app, $app->make('Illuminate\Support\Collection'));
        });

        $this->app->bind('App\Repositories\Contracts\TagRepository', function($app) {
            return new \App\Repositories\TagRepository($this->app, $app->make('Illuminate\Support\Collection'));
        });
    }
}
