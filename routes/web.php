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


Auth::routes();


Route::get('/home/{user}', 'HomeController@index')->name('home');
Route::get('/profile/local/{user}', 'ProfilesController@index')->name('profile.show');
Route::get('/profile/local/{user}/edit', 'ProfilesController@edit')->name('profile.edit');
Route::patch('/profile/local/{user}', 'ProfilesController@update')->name('profile.edit');

Route::get('/', function () 
{
    return view('welcome');
}
);