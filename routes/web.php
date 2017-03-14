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

// index
Route::get('/', 'Controller@index');

// Sitemap
Route::get('/sitemap', 'Controller@sitemap');

// Unsubscribe comment notifications
Route::get('/unsubscribe', 'Api\CommentController@unsubscribe');

Route::get('/login', 'Auth\LoginController@showLoginForm');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth'], function () {
    // dashboard
    Route::get('/dashboard', 'Controller@dashboard');
    Route::get('/dashboard/posts/{id}/export', 'Api\PostController@export');
    Route::any('/dashboard/{any}', 'Controller@dashboard')->where('any', '.*');
});

// Must be placed below other routes.
Route::any('/{any}', 'Controller@index')->where('any', '.*');
