<?php


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {
        return view('auth.login');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

        Route::get('dashboard', 'HomeController@dashboard');
        Route::resource('pages', 'PagesController');

    });

    Route::get('/home', 'HomeController@index');
});
