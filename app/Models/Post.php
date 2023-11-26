<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Rennokki\QueryCache\Traits\QueryCacheable;
use TCG\Voyager\Models\Post as PostModel;

class Post extends PostModel{

    use QueryCacheable;
    protected $cacheFor = 3600;

    const PLACEHOLDER = "http://placehold.it/1144x690";

    public function images()
    {
        return $this->hasMany(PostImage::class);
    }

    public function getDate(){
        $created_at = new Carbon($this->created_at);
        setlocale(LC_TIME, 'hu_HU.UTF-8');

        return $created_at->formatLocalized('%d %B, %Y');
    }

    public function firstImageSrc(){
        return ($this->images()->first() ? $this->images()->first()->image_path : self::PLACEHOLDER);
    }

}