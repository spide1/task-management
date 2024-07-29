<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/todos', [TaskController::class, 'index']);
Route::post('/todos', [TaskController::class, 'store']);
Route::delete('/todos/{id}', [TaskController::class, 'destroy']);