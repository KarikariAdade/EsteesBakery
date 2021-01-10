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

Route::get('order', 'WebsiteController@checkout')->name('website.order.index');


#--------------------------------------- Client Routes ----------------------------------



#--------------------------------------- Client Auth ------------------------------------


Route::get('client/signup', 'Auth\RegisterController@showMemberRegisterForm')->name('signup');

Route::post('client/register', 'Auth\RegisterController@createMember')->name('client.register');

Route::get('client/login', 'Auth\MemberLoginController@showMemberLoginForm')->name('member_login');

Route::post('client/signin', 'Auth\MemberLoginController@MemberLogin')->name('login_member');

#--------------------------------------- End Client Auth ---------------------------------


Route::group(['middleware' => ['auth:member']], function(){

    #------------------------------------ Client Dashboard ------------------------------

	Route::get('client/dashboard', 'Client\PagesController@dashboard')->name('client.dashboard');

	#------------------------------------- End Client Dashboard -------------------------

});




#------------------------------------------ ADMIN DASHBOARD ROUTES --------------------------

Route::get('admin/dashboard', 'Admin\AdminPagesController@dashboard')->name('admin.dashboard');


#----------------------------------------- Admin Profile Route ------------------------------

Route::get('admin/dashboard/profile', 'Admin\ProfileController@index')->name('admin.profile.index');

