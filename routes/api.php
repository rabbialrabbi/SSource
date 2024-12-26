<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::apiResource('posts', PostController::class)->only('index', 'store', 'show');
Route::apiResource('tasks', TaskController::class)->only( 'store', 'update');
Route::get('/tasks/pending', [TaskController::class, 'pending']);

Route::post('register', [AuthController::class, 'register']);


//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
