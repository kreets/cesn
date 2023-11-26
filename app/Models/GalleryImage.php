<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Rennokki\QueryCache\Traits\QueryCacheable;

class GalleryImage extends Model
{
    use QueryCacheable;
    protected $cacheFor = 3600;

    protected $fillable = ['image_path'];

}