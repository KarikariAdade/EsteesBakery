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

Route::get('gallery', 'WebsiteController@gallery')->name('website.gallery');

Route::get('contact', 'WebsiteController@contact')->name('website.contact');

Route::get('item/detail', 'WebsiteController@itemDetail')->name('website.item.detail');


Route::get('cart', 'WebsiteController@cart')->name('website.cart.index');

// ADMIN ROUTES

Route::get('admin/dashboard', 'Admin\AdminPagesController@dashboard')->name('admin.dashboard');