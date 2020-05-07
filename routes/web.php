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

Route::get( '/', function() {
    return view( 'welcome' );
});

// Route::get( '/home', function() {
//     return view( 'calories.cal' );
// })->name('home');



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('profiless','HomeController@profile');

Route::resource('blog', 'BlogController');

Route::resource('profile', 'ProfileController');

Route::get('/menucreate', 'MenuController@index');
Route::post('/addmenu', 'MenuController@store')->name('addmenu');
Route::get('/menupage', 'MenuController@display');
Route::get('/editmenu/{id}', 'MenuController@edit');
Route::put('/updatemenu{id}', 'MenuController@update');
Route::get('/deletemenu/{id}', 'MenuController@delete');

Route::get('/homepage','BlogController@firsthome')->name('homepage');
Route::get('/profilepage','BlogController@profile');
Route::get('/gallerypage','BlogController@gallery');
