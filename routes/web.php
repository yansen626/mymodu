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

// contact us menu
Route::get('/contact-us', 'Frontend\HomeController@contactUs')->name('contact-us');
Route::post('/contact-us', 'Frontend\HomeController@submitContactUs')->name('contact-us-post');

// about us menu
Route::get('/about-us', 'Frontend\HomeController@AboutUs')->name('about-us');
Route::get('/about-us-facts', 'Frontend\HomeController@AboutUsFacts')->name('about-us-facts');
Route::get('/about-us-location', 'Frontend\HomeController@AboutUsLocation')->name('about-us-location');

// industrial solution menu
Route::get('/industrial-food', 'Frontend\HomeController@industrialFood')->name('industrial-food');
Route::get('/industrial-teabag', 'Frontend\HomeController@industrialTeaBag')->name('industrial-teabag');
Route::get('/industrial-carton', 'Frontend\HomeController@industrialCarton')->name('industrial-carton');
Route::get('/industrial-pharmacy', 'Frontend\HomeController@industrialPharmacy')->name('industrial-pharmacy');
Route::get('/industrial-paper', 'Frontend\HomeController@industrialPaper')->name('industrial-paper');
Route::get('/industrial-electric', 'Frontend\HomeController@industrialElectric')->name('industrial-electric');
Route::get('/industrial-optical', 'Frontend\HomeController@industrialOptical')->name('industrial-optical');
Route::get('/industrial-can', 'Frontend\HomeController@industrialCan')->name('industrial-can');
Route::get('/industrial-automotive', 'Frontend\HomeController@industrialAutomotive')->name('industrial-automotive');
Route::get('/industrial-puck', 'Frontend\HomeController@industrialPuck')->name('industrial-puck');
Route::get('/industrial-tobacco', 'Frontend\HomeController@industrialTobacco')->name('industrial-tobacco');

// download pdf
Route::get('/download/{filename}', 'Frontend\HomeController@DownloadFile')->name('download');

//videos menu
Route::get('/videos', 'Frontend\HomeController@Video')->name('videos');

//article
Route::get('/article/{page}', 'Frontend\HomeController@Article')->name('article');

// End Frontend Routing
Route::get('/home', 'HomeController@index')->name('home');
