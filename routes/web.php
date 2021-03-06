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

Route::get('/home', 'HomeController@index');
/*
 * Admin Controller
 */
Route::get('/admin', 'AdminController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/index', 'AdminController@index');
Route::get('/form', 'AdminController@form');
Route::get('/form2', 'AdminController@create');
Route::get('/applicant_details/{id}', 'AdminController@show');
Route::post('/save', 'AdminController@store');
