<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\SponsorController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/products', [ProductController::class ,'index'])->name('get.products');
Route::get('/products/feature', [ProductController::class, 'get_feature'])->name('get.products.feature');
Route::get('/products/{id}', [ProductController::class, 'get_product'])->name('get.products.details');
Route::post('/comments/{product_id}', [CommentController::class, 'store'])->name('add.comments');
Route::get('/comments/{product_id}', [CommentController::class, 'index'])->name('get.comments');
Route::get('/sponsors', [SponsorController::class, 'index'])->name('get.sponsor');

