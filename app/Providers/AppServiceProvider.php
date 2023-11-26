<?php

namespace App\Providers;

use App\Http\Controllers\Voyager\CustomMediaController;
use App\Http\Controllers\Voyager\VoyagerExtendedController;
use App\Models\GalleryImage;
use App\Models\Page;
use App\Models\Post;
use App\Observers\GalleryImageObserver;
use App\Observers\PageObserver;
use App\Observers\PostObserver;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Http\Controllers\VoyagerController;
use TCG\Voyager\Http\Controllers\VoyagerMediaController;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VoyagerMediaController::class, CustomMediaController::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Page::observe(PageObserver::class);
        Post::observe(PostObserver::class);
        GalleryImage::observe(GalleryImageObserver::class);
    }
}
