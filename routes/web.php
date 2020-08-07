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
    return view('home.home');
});

Route::get('home', function () {
    return view('home.home');
});

Route::get('connect-us', function () {
    return view('contact.contact');
});

Route::get('single-product', function () {
    return view('product.single-product');
});

Route::get('our-story', function () {
    return view('story.our-story');
});






Route::get('link', function () {
    return view('link.link');
});