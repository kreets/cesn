<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
Route::get('/', 'App\Http\Controllers\SiteController@index')->name('home');
Route::get('/blog/{slug}', 'App\Http\Controllers\SiteController@blogpost')->name('blogpost');
Route::post('/kapcsolat', 'App\Http\Controllers\SiteController@kapcsolat')->name('kapcsolat');
Route::post('/hirlevel/feliratkozok', 'App\Http\Controllers\SiteController@hirlevel_feliratkozas')->name('subscribe');
Route::post('/hirlevel/leiratkozas', 'App\Http\Controllers\SiteController@hirlevel_leiratkozas');
Route::get('/{page}', 'App\Http\Controllers\PageController@switcher')->name('page');





