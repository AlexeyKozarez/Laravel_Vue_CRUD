<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Person', 'prefix' => 'people'], function() {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::patch('/{person}', 'UpdateController');
    Route::delete('/{person}', 'DeleteController');
});
