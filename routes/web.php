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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


//Route::get('/member', 'MemberController@index');
//Route::get('/member/form', 'MemberController@memberForm');
Route::resource('member', 'MemberController');

//Route::get('/event/calendar', 'EventController@eventCalendar');
Route::resource('event', 'EventController');

//Route::get('/article', 'ArticleController@index');
Route::resource('article', 'ArticleController');
Route::get('/article/blog', 'ArticleController@blog');

//Route::resource('message','MessageController');
Route::post('/message/sendBroadcast','MessageController@sendBroadcast');

Route::get('/home', 'HomeController@index');
