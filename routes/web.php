<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function(){
    Route::get('/','index')->name('home.index');
});




Route::controller(ShopController::class)->group(function(){
    Route::get('shop','shop_index')->name('shop.index');
    Route::post('quick-shop-preview','quick_shop_preview');
});


