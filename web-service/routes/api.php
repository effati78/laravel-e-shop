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

Route::get('/products', [ProductController::class, 'index'])->name('products.get');
Route::post('/products', [ProductController::class, 'add_product'])->name('products.add');
Route::get('/products/featured', [ProductController::class, 'get_feature'])->name('products.feature.get');
Route::get('/products/{id}', [ProductController::class, 'get_product'])->name('products.details.get');
Route::delete('/products/{product_id}', [ProductController::class, 'delete_product'])->name('products.delete');
Route::put('/products/{product_id}', [ProductController::class, 'edit_product'])->name('products.edit');

Route::post('/comments/{product_id}', [CommentController::class, 'add_comment'])->name('comments.add');
Route::get('/comments/{product_id}', [CommentController::class, 'index'])->name('comments.get');

Route::get('/sponsors', [SponsorController::class, 'index'])->name('sponsor.get');
