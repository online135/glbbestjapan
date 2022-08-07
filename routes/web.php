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
})->name('index');

Route::get('/index', function () {
    return view('welcome');
})->name('index');

/**
 * GLOBAL BEST JAPAN とは
 */
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/culture', function () {
    return view('culture');
})->name('culture');


/**
 * 会社概要
 */
Route::get('/outline', function () {
    return view('outline');
})->name('outline');

Route::get('/message', function () {
    return view('message');
})->name('message');

Route::get('/interview', function () {
    return view('interview');
})->name('interview');

Route::get('/ceointerview', function () {
    return view('ceointerview');
})->name('ceointerview');

Route::get('/cto_interview', function () {
    return view('cto_interview');
})->name('cto_interview');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');


/**
 * 事業案内
 */
Route::get('/business', function () {
    return view('business');
})->name('business');


/**
 * 採用情報
 */
Route::get('/recruit', function () {
    return view('recruit');
})->name('recruit');


/**
 * お問い合わせ
 */
Route::get('/contact', function () {
    return view('contact');
})->name('contact');


/**
 * Feed
 */
Route::get('/feed', function() {
    return view('feed');
})->name('feed');