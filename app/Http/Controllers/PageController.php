<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;

class SiteController extends BaseController{

    public function index(Request $request){
        return view("site.index");
    }

    public function about(Request $request){
        return view("site.about");
    }

    public function programs(Request $request){
        return view("site.index");
    }

    public function schedule(Request $request){
        return view("site.index");
    }

    public function blog(Request $request){
        return view("site.index");
    }

    public function contact(Request $request){

    }

}