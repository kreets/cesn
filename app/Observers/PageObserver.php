<?php

namespace App\Observers;

use App\Models\Page;

class PageObserver
{
    public function saved(Page $page)
    {
        $page->flushQueryCache();
    }

    public function updated(Page $page)
    {
        $page->flushQueryCache();
    }

    public function deleted(Page $page)
    {
        $page->flushQueryCache();
    }
}
