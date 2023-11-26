<?php

namespace App\Models;

use Rennokki\QueryCache\Traits\QueryCacheable;
use TCG\Voyager\Models\Page as PageModel;

class Page extends PageModel{

    use QueryCacheable;
    protected $cacheFor = 3600;

}