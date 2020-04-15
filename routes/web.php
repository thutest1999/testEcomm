<?php

use Gloudemans\Shoppingcart\Facades\Cart;
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

Route::get('/', function () {
    return view('welcome');
});
/* Route Product*/
Route::get('/shop', 'ProductController@index')->name('products.index');
Route::get('/shop/{slug}', 'ProductController@show')->name('products.show');

/*Route shopping cart */
Route::get('cart', 'CartController@index')->name('cart.index');
Route::post('/cart/add', 'CartController@store')->name('cart.store');
Route::get('remove', function () {
    Cart::destroy();
});
Route::delete('/cart/{rowId}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{rowId}', 'CartController@update')->name('cart.update');
