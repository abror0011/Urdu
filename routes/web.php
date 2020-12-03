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

// Auth::routes();
Route::get('/','SityController@index')->name('home');
Route::namespace('Admin')->middleware('auth')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/','SityController@home')->name('home');
    // Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/students','StudentController');
    Route::resource('/amaliyot','AmaliyotController');
    // Profile uptada
    Route::put('/password/{id}','StudentController@password')->name('password');
    Route::get('/amaliyotlar','AmaliyotlarController@index')->name('amaliyotlar');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
