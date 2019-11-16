<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Auth\LoginController@showlog')->middleware('guest');
Route::get('application',"ApplicationController@index")->name('application');
Route::get('/index', function () {
    return view('index');
});
Route::get('/video1', function () {
    return view('video1');
});
Route::get('/video2', function () {
    return view('video2');
});
Route::get('/video3', function () {
    return view('video3');
});

Route::post('login',"Auth\LoginController@login")->name('login');
Route::post('logout',"Auth\LoginController@logout")->name('logout');
/*Route::get('/index', function () {
    return view('index');
    Route::get('/home', 'HomeController@index')->name('home');
});
*/
Auth::routes();

