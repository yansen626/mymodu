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

//Build in Routes for Auth
Auth::routes();

// Login Frontend
Route::get('/login', 'Auth\LoginController@login')->name('login');
Route::post('/signin', 'Auth\LoginController@authenticate')->name('signin');

// Frontend Routing
Route::get('/', 'Frontend\HomeController@home')->name('landing');

// contact us
Route::get('/contact-us', 'Frontend\HomeController@contactUs')->name('contact-us');
Route::post('/contact-us', 'Frontend\HomeController@submitContactUs')->name('contact-us-post');

// contact us
Route::get('/about-us', 'Frontend\HomeController@AboutUs')->name('about-us');

// End Frontend Routing
Route::get('/home', 'HomeController@index')->name('home');
