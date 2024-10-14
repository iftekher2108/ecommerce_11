<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('store.welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::controller(ProductController::class)->group(function(){
    Route::get('product','product')->name('product.index');
    Route::get('product/create','product_create')->name('product.create');
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('category','category')->name('category.index');
    Route::get('category/create','category_create')->name('category.create');
    Route::post('category/store','category_store')->name('category.store');
});


