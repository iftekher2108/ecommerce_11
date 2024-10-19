<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// editor image upload function
Route::post('text-editor-upload', function (Request $request) {
    $fileName= $request->file('file')->getClientOriginalName();
    $path=$request->file('file')->storeAs('editor_uploads', $fileName,'public');
    return response()->json(['location'=>asset("storage/$path")]);
});
// editor image upload function

