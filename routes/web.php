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

#Shop
Route::prefix('shop')->group(function () {
    Route::get('/', 'ShopController@categories'); // shop page request method
    Route::get('cart', 'ShopController@cart'); // the cart list method
    Route::get('clear-cart', 'ShopController@clearCart'); // clear all cart page request method
    Route::get('add-to-cart', 'ShopController@addToCart'); // add to cart page request method
    Route::get('update-cart', 'ShopController@updateCart'); // update cart page request method plus/minus
    Route::get('order-now', 'ShopController@orderNow'); //  the order button page request method
    Route::get('remove-cart{pid}', 'ShopController@removeCart'); // remove one item in cart page request method
    Route::get('search/{purl}', 'ShopController@search'); // search  in case of unsuccsses
    Route::get('{curl}', 'ShopController@products'); // products page request method
    Route::get('{curl}/{purl}', 'ShopController@item'); // item page request method
});

#User

Route::prefix('user')->group(function () {

    Route::middleware(['signeGuard'])->group(function () {
        Route::get('signin', 'UserController@getSignin'); // signin request method (signin click)
        Route::post('signin', 'UserController@postSignin'); // signin request method (submit click)
        Route::get('signup', 'UserController@getSignup'); // signin request method (signup click)
        Route::post('signup', 'UserController@postSignup'); // signin request method (submit click)
    });
    Route::get('profile', 'UserController@profile');
    Route::get('logout', 'UserController@logout'); // logOut request method (logout click)
});

#Dashboard
Route::prefix('cms')->group(function () {

    Route::middleware(['cmsguard'])->group(function () {
        Route::get('dashboard', 'CmsController@dashboard');
        Route::get('orders', 'CmsController@orders');
        Route::resource('menu', 'MenuController');
        Route::resource('content', 'ContentController');
        Route::resource('categories', 'CategoriesController');
        Route::resource('products', 'ProductsController');

    });

});

#Pages
Route::get('/', 'PagesController@home'); // home page request method
Route::get('/gallery', 'PagesController@gallery'); // home page request method
Route::get('{url}', 'PagesController@content'); // content page request method

#Search
Route::get('search/{search}', 'SearchController@search'); //search in case of succsess
