<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('home','SofiaController@index');

//Route::resource('blog','BlogController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile','HomeController@profile');

Route::get('food','HomeController@food');
//Route::get('blogdetail','SofiaController@blogdetail');
//Route::resource('blogdetail', 'SofiaController');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
