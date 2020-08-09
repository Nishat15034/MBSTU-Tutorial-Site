<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/course/{id}', 'FrontendController@course');
Route::get('/{topic_id}/{categoty}/{sub_categoty}', 'FrontendController@topicContent');
Route::get('/','FrontendController@home');
Route::get('/contact', 'FrontendController@contact');
Route::post('/subscribe', 'FrontendController@subscribe');
Route::post('/unsubscribe/home', 'FrontendController@unSubscribeHome');
Route::get('/unsubscribe/{email}', 'FrontendController@unSubscribeHome2');
Route::post('/subscribe/home', 'FrontendController@subscribeHome');
Route::post('/message', 'FrontendController@message');
Route::get('/confirm-unsubscribe/{email}', 'FrontendController@confirmUnsubscribe');
