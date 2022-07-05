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
    return view('products');
});

Route::get('/documents', function () {
    return view('documents');
});

Route::get('/featured', function () {
    return view('featured');
});

Route::get('/products/1', function () {
    return view('products_show');
});

Route::get('/sponsors', function () {
    return view('sponsors');
});