<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', PostController::class)->only('index', 'store');

Route::post('register', [AuthController::class, 'register']);


//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
