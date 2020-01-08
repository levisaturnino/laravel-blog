<?php

Route::resource('/users','UserController');

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->namespace('Admin')->group(function(){
    Route::resource('posts', 'PostController');
    Route::resource('/categories','CategoryController');


Route::prefix('profile')->name('profile.')->group(function(){
    Route::get('/', 'ProfileController@index')->name('index');
    Route::post('/', 'ProfileController@update')->name('update');
});

});
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
