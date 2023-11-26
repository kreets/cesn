<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    public function saved(Post $page)
    {
        $page->flushQueryCache();
    }

    public function updated(Post $page)
    {
        $page->flushQueryCache();
    }
}
