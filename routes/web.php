<?php

use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('store.index');
})->name('home.index');

Route::controller(ShopController::class)->group(function(){
    Route::get('shop','shop_index')->name('shop.index');
});


