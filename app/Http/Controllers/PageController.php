<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use TCG\Voyager\Models\Page;

class PageController extends BaseController{

    public function switcher($page){

        $entity = Page::where('slug', $page)->first();
        if(!$entity){
            throw new NotFoundHttpException("Eltévedtél :(");
        }

        $viewPath = 'pages.' . $page;

        if (View::exists($viewPath)) {
            // Render the specific page view
            return view($viewPath, ['page' => $entity]);
        } else {
            // Render the default view
            return view('pages.default', ['page' => $entity]);
        }

    }

}