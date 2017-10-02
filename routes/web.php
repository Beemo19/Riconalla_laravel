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

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function () {
    return view('about');
});

Route::get('mysubjects', function () {
    return view('mysubjects');
});

Route::get('smaccnt', function () {
    return view('smaccnt');
});

Route::get('edbg', function () {
    return view('edbg');
});

Route::get('php2', function () {
    return view('php2');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
