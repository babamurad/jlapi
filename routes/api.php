<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::post('/registration', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/profile', [UserController::class, 'profile'])->middleware('auth:sanctum');

