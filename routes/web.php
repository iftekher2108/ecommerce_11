<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home.index');
    Route::get('category/{slug}','categorySearch')->name('category.search');
    Route::post('shop/product/filter','shop_search')->name('shop.search');
    Route::get('product/{slug}','product_detail')->name('product.detail');
});




Route::controller(ShopController::class)->group(function(){
    Route::get('shop','shop_index')->name('shop.index');
    Route::post('quick-shop-preview','quick_shop_preview')->name('quick.shop.preview');
});


