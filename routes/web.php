<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'WelcomeController@index');
Route::view('about', 'about.index') -> name('about.index');
Route::view('about/book', 'about.book') -> name('about.book');
Route::view('about/faq', 'about.faq') -> name('about.faq');
Route::view('about/privacy', 'about.privacy') -> name('about.privacy');
Route::view('about/tos', 'about.tos') -> name('about.tos');

Route::view('contact', 'contact.index') -> name('contact.index');

Route::get('languages', 'LanguageController@index') -> name('languages.index');

Route::get('locations', 'LocationController@index') -> name('locations.index');

Route::get('map', 'MapController@index') -> name('maps.index');

Route::resource('events', 'EventsController');

//Auth::routes();
