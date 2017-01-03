<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'PageController@index');


Auth::routes();


Route::resource('member', 'MemberController');

//Route::get('/event/calendar', 'EventController@eventCalendar');
Route::resource('event', 'EventController');

Route::post('/article/updatePublished', 'ArticleController@updatePublished');
Route::get('/article/blog', 'ArticleController@blog');
Route::resource('article', 'ArticleController');

Route::post('/message/sendBroadcast','MessageController@sendBroadcast');
Route::resource('message','MessageController');

Route::get('/profile', 'HomeController@profile');
Route::get('/home', 'HomeController@index');
