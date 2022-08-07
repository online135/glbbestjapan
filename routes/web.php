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
    return view('welcome');
});

/**
 * GLOBAL BEST JAPAN とは
 */
Route::get('/about', function () {
    return view('about');
});

Route::get('/culture', function () {
    return view('culture');
});


/**
 * 会社概要
 */
Route::get('/outline', function () {
    return view('outline');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/interview', function () {
    return view('interview');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});


/**
 * 事業案内
 */
Route::get('/business', function () {
    return view('business');
});



/**
 * 採用情報
 */
Route::get('/recruit', function () {
    return view('recruit');
});


/**
 * お問い合わせ
 */
Route::get('/contact', function () {
    return view('contact');
});