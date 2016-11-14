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

Route::get('/',         ['as' => 'home',   'uses' => 'UserController@index']);
Route::get('status/{id}',         ['as' => 'toggle',   'uses' => 'UserController@getLightsaberStatus']);
Route::get('toggle/{id}',         ['as' => 'toggle',   'uses' => 'UserController@toggleLightsaberStatus']);
Route::get('notify/{id}',         ['as' => 'notify',   'uses' => 'UserController@notifyJedi']);