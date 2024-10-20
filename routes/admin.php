<?php
use App\Http\Controllers\BrandController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::prefix('admin')->group(function(){
    Auth::routes();
    Route::middleware('auth')->group(function () {

        Route::controller(DashboardController::class)->group(function(){
            Route::get('dashboard','index')->name('dashboard');
        });

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



