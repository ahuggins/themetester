<?php

namespace App\Providers;

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
        $themeName = collect(explode('/', request()->headers->get('referer')))->pop();
        $this->app['view']->addNamespace(
            'theme',
            base_path() . '/storage/app/themes/' . $themeName
        );
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
