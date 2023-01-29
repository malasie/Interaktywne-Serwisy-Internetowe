<?php

use Illuminate\Support\Facades\Route;

Route::get('/simple', [App\Http\Controllers\PlaceSimpleController::class, 'index']);
Route::get('/simple/findPlace', [App\Http\Controllers\PlaceSimpleController::class, 'findPlace']);

Route::get('/', function () {
    return view('welcome');
});
