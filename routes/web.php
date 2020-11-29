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

Route::get('/', function () {
    return view('landing');
});

Route::get('/home', function () {
    return view('home');
});

//route for cart page
Route::get('/cart', function () {
    return view('cart');
});
//route for checkout page
Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/vendoraccount', function () {
    return view('vendoraccount');
});

Route::get('/useraccount', function () {
    return view('useraccount');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::get('/vendors', function () {
    return view('vendors');
});

//routes for vednors
Route::get('/NaturalBeeFarm', function () {
    return view('NaturalBeeFarm');
});

Route::get('/MarketFreshFarm', function () {
    return view('MarketFreshFarm');
});

Route::get('/FarFarmMeats', function () {
    return view('FarFarmMeats');
});
