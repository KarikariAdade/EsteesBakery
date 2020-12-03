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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

// WEBSITE ROUTES
Route::get('/', 'WebsiteController@home')->name('website.home');

Route::get('cakes', 'WebsiteController@cakes')->name('website.cakes');

Route::get('about', 'WebsiteController@about')->name('website.about');

Route::get('pizza', 'WebsiteController@pizza')->name('website.pizza');

Route::get('pastries', 'WebsiteController@pastries')->name('website.pastries');

