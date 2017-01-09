<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'WelcomeController@index');
Route::get('contact', 'WelcomeController@contact');
Route::get('about', 'PagesController@about');

Route::get('/test.html', function () {
    return view('welcome');
});

//記事表示関係
//一覧
Route::get('articles', 'ArticlesController@index');
//内容表示
Route::get('articles/{id}', 'ArticlesController@show');
