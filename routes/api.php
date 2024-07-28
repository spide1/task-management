<?php
use Illuminate\Http\Request;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/todo',[TodoController::class,'index']);