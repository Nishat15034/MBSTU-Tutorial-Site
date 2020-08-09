<?php

use App\Http\Middleware\CheckActiveAdmin;
use App\Http\Middleware\CheckSuperAdmin;

Route::group(['prefix' => 'admin' , 'middleware' => ['auth']], function () {

    Route::get('/dashboard', 'DashboardController@index');

    Route::get('/course', 'CourseController@index')->middleware(CheckActiveAdmin::class);
    Route::get('/course/add', 'CourseController@create')->middleware(CheckActiveAdmin::class);
    Route::post('/course/add', 'CourseController@store')->middleware(CheckActiveAdmin::class);
    Route::get('/course/edit/{id}', 'CourseController@edit')->middleware(CheckActiveAdmin::class);
    Route::post('/course/edit/{id}', 'CourseController@update')->middleware(CheckActiveAdmin::class);
    Route::get('/course/delete/{id}', 'CourseController@destroy')->middleware(CheckActiveAdmin::class);

    Route::get('/category', 'CategoryController@index')->middleware(CheckActiveAdmin::class);
    Route::get('/category/add', 'CategoryController@create')->middleware(CheckActiveAdmin::class);
    Route::post('/category/add', 'CategoryController@store')->middleware(CheckActiveAdmin::class);
    Route::get('/category/edit/{id}', 'CategoryController@edit')->middleware(CheckActiveAdmin::class);
    Route::post('/category/edit/{id}', 'CategoryController@update')->middleware(CheckActiveAdmin::class);
    Route::get('/category/delete/{id}', 'CategoryController@destroy')->middleware(CheckActiveAdmin::class);

    Route::get('/sub-category', 'SubCategoryController@index')->middleware(CheckActiveAdmin::class);
    Route::get('/sub-category/index-by-category/{id}', 'SubCategoryController@indexByCategory')->middleware(CheckActiveAdmin::class);
    Route::get('/sub-category/add', 'SubCategoryController@create')->middleware(CheckActiveAdmin::class);
    Route::post('/sub-category/add', 'SubCategoryController@store')->middleware(CheckActiveAdmin::class);
    Route::get('/sub-category/edit/{id}', 'SubCategoryController@edit')->middleware(CheckActiveAdmin::class);
    Route::post('/sub-category/edit/{id}', 'SubCategoryController@update')->middleware(CheckActiveAdmin::class);
    Route::get('/sub-category/delete/{id}', 'SubCategoryController@destroy')->middleware(CheckActiveAdmin::class);

    Route::get('/topic', 'TopicController@index')->middleware(CheckActiveAdmin::class);
    Route::get('/topic/add', 'TopicController@create')->middleware(CheckActiveAdmin::class);
    Route::post('/topic/add', 'TopicController@store')->middleware(CheckActiveAdmin::class);
    Route::get('/topic/edit/{id}', 'TopicController@edit')->middleware(CheckActiveAdmin::class);
    Route::post('/topic/edit/{id}', 'TopicController@update')->middleware(CheckActiveAdmin::class);
    Route::get('/topic/delete/{id}', 'TopicController@destroy')->middleware(CheckActiveAdmin::class);

    Route::get('/topic-content', 'TopicContentController@index')->middleware(CheckActiveAdmin::class);
    Route::get('/topic-content/add', 'TopicContentController@create')->middleware(CheckActiveAdmin::class);
    Route::post('/topic-content/add', 'TopicContentController@store')->middleware(CheckActiveAdmin::class);
    Route::get('/topic-content/view/{id}', 'TopicContentController@show')->middleware(CheckActiveAdmin::class);
    Route::get('/topic-content/edit/{id}', 'TopicContentController@edit')->middleware(CheckActiveAdmin::class);
    Route::post('/topic-content/edit/{id}', 'TopicContentController@update')->middleware(CheckActiveAdmin::class);
    Route::get('/topic-content/delete/{id}', 'TopicContentController@destroy')->middleware(CheckActiveAdmin::class);

    Route::get('/subscribers', 'SubscribeResponseController@index')->middleware(CheckSuperAdmin::class);
    Route::get('/subscribers/delete/{id}', 'SubscribeResponseController@destroy')->middleware(CheckSuperAdmin::class);

    Route::get('/subscribers/message', 'SubscribeResponseController@indexMessage')->middleware(CheckSuperAdmin::class);
    Route::get('/subscribers/message/create', 'SubscribeResponseController@createMessage')->middleware(CheckSuperAdmin::class);
    Route::post('/subscribers/message/store', 'SubscribeResponseController@storeMessage')->middleware(CheckSuperAdmin::class);
    Route::get('/subscribers/message/view/{id}', 'SubscribeResponseController@showMessage')->middleware(CheckSuperAdmin::class);
    Route::get('/subscribers/message/delete/{id}', 'SubscribeResponseController@destroyMessage')->middleware(CheckSuperAdmin::class);

    Route::get('/messages', 'MessageResponseController@index')->middleware(CheckSuperAdmin::class);
    Route::get('/message/view/{id}', 'MessageResponseController@show')->middleware(CheckSuperAdmin::class);
    Route::post('/message/reply', 'MessageResponseController@reply')->middleware(CheckSuperAdmin::class);

    Route::get('/user/pending', 'AdminController@pendingUser')->middleware(CheckSuperAdmin::class);
    Route::get('/user/active', 'AdminController@activeUser')->middleware(CheckSuperAdmin::class);
    Route::get('/user/active/{id}', 'AdminController@active')->middleware(CheckSuperAdmin::class);
    Route::get('/user/deactive/{id}', 'AdminController@deactive')->middleware(CheckSuperAdmin::class);
    Route::get('/user/delete/{id}', 'AdminController@delete')->middleware(CheckSuperAdmin::class);

    Route::get('/logout', 'AdminController@adminLogOut');

    // ========= angular ================================

    Route::get('/sub-category/find/{id}', 'AngularController@getSubCategory')->middleware(CheckActiveAdmin::class);
    Route::get('/topic/find/{id}', 'AngularController@getTopic')->middleware(CheckActiveAdmin::class);
    Route::get('/topic/edit/find/{id}', 'AngularController@getEditTopic')->middleware(CheckActiveAdmin::class);
    Route::get('/sub-category/edit/find/{id}', 'AngularController@getEditSubCategory')->middleware(CheckActiveAdmin::class);

});
