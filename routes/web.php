<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ProductController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function (): void {
        Route::get('/', 'list')->name('list');
         Route::get('/{product}', 'view')->name('view');
    });
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'list')->name('categories.list');
    Route::get('/categories/{category}', 'view')->name('categories.view');
});