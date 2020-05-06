<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::resource('post', 'api\PostController')->only('index', 'show');

Route::get('post/{category}/category', 'api\CategoryPostController@show');
Route::get('post/{url_clean}/url_clean', 'api\UrlCleanController@post');

Route::get('category', 'api\CategoryController@index');
Route::get('category/all', 'api\CategoryController@all')->name('category/all');


