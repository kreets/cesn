<?php

namespace App\Providers;

use App\Http\Controllers\Voyager\VoyagerExtendedController;
use App\Models\Page;
use App\Observers\PageObserver;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Http\Controllers\VoyagerController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Page::observe(PageObserver::class);
    }
}
