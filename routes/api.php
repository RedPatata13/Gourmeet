<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/register', [RegisterController::class, 'store']);

// Optional: Other auth routes
// Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'store']);
// Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'destroy'])->middleware('auth:sanctum');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});