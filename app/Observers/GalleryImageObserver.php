<?php

namespace App\Observers;

use App\Models\GalleryImage;

class GalleryImageObserver
{
    public function saved(GalleryImage $image)
    {
        $image->flushQueryCache();
    }

    public function updated(GalleryImage $image)
    {
        $image->flushQueryCache();
    }

    public function deleted(GalleryImage $image){
        $image->flushQueryCache();
    }
}
