<?php

namespace CachetHQ\Website\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     */
    public function register()
    {
        $this->app->view->composer('*', 'CachetHQ\Website\Composers\NavComposer');
    }
}
