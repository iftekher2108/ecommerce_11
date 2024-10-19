<?php

use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('store.welcome');
});



Route::prefix('admin')->group(function(){
Auth::routes();
Route::middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');

    Route::controller(ProductController::class)->group(function () {
        Route::get('product', 'product')->name('product.index');
        Route::get('product/create', 'product_create')->name('product.create');
        Route::post('product/store','product_store')->name('product.store');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::get('category', 'category')->name('category.index');
        Route::get('category/create', 'category_create')->name('category.create');
        Route::post('category/store', 'category_store')->name('category.store');
    });

    Route::controller(BrandController::class)->group(function () {
        Route::get('brand', 'brand')->name('brand.index');
        Route::get('brand/create', 'brand_create')->name('brand.create');
        Route::post('brand/store', 'brand_store')->name('brand.store');
    });
});
});

