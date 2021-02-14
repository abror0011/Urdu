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
Route::get('/about', 'SityController@about')->name('about');
Route::get('/author', 'SityController@author')->name('author');
Route::get('/help', 'SityController@help')->name('help');
Route::get('/result', 'SityController@result')->name('result');
Route::get('/news', 'SityController@news')->name('news');
Route::get('/news_more/{id}', 'SityController@news_more')->name('news_more');
Route::get('/form', 'SityController@form')->name('form');
Route::get('/contract', 'SityController@contract')->name('contract');
Route::get('/content', 'SityController@content')->name('content');


Route::namespace('Admin')->middleware('auth')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/','SityController@home')->name('home');
    // Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/students','StudentController')->middleware('role:admin');
    Route::resource('/amaliyot','AmaliyotController')->middleware('role:users');
    Route::resource('/posts','PostsController')->middleware('role:admin');
    // Profile uptada
    Route::put('/password/{id}','StudentController@password')->name('password');
    Route::get('/amaliyotlar','AmaliyotlarController@index')->name('yangiAmaliyotlar')->middleware('role:admin');
    Route::get('/barchaAmaliyotlar','AmaliyotlarController@amaliyotlar')->name('barchaAmaliyotlar')->middleware('role:admin');
    Route::put('/rayting/{id}','AmaliyotlarController@rayting')->name('rayting')->middleware('role:admin');
    Route::get('/batafsil{id}','AmaliyotlarController@batafsil')->name('batafsil')->middleware('role:admin');
    Route::get('/profile','ProfileController@profile')->name('profile');
    Route::put('/profile_update','ProfileController@profile_update')->name('profile_update');
    Route::put('/password','ProfileController@profile_password')->name('password_update');
    Route::get('/adminProfile','ProfileController@adminProfile')->name('adminProfile');
    Route::put('/admin_profile_update','ProfileController@adminProfileUpdate')->name('admin_profile_update');
    Route::put('/password','ProfileController@admin_password')->name('admin_update');
});


Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
