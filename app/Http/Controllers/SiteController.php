<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Page;

class SiteController extends BaseController{

    public function index(Request $request){

        return view(
            "site.index", [
                "rolunk" => getPage("rolunk")
            ]
        );
    }

    public function blogpost($slug){
        $post = Post::where('slug', $slug)->first();
        return view("pages.blogpost", ["post" => $post]);
    }

    public function kapcsolat(Request $request){
        exit('POSt, GOOGLE CAPTCHA');
    }

    public function hirlevel(Request $request){
        exit('POSt, GOOGLE CAPTCHA');
    }

}