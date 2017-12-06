<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

/**
 * Main route
 */
Route::get('/home', 'TaskController@all')->name('home');

/**
 * CRUD related routes
 */
Route::group(['prefix' => '/handle', 'middleware' => 'auth'], function() {
    Route::post('/create', 'TaskController@create')->name('todo.create');
});
