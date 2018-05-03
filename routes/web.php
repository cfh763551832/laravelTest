<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("login", "WebController@login")->middleware('cors');

Route::post("login", "WebController@postLogin")->middleware('cors');



Route::group(["middleware"=>"cors"],function (){
//命名路由
    Route::get('hello/route',"WebController@helloRoute")->name("hello");


});

Route::get('article',"TestController@getArticle");

//资源路由
Route::resource('articles',"ArticleController");











