<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Recipe\RecipeController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    //auth
    Route::get('/login', [PageController::class, 'login'])->name('login');
    Route::get('/register', [PageController::class, 'register'])->name('register');
    
    // auth
    Route::post('/login', [LoginController::class, 'store']);
    Route::post('/register', [RegisterController::class, 'store']);
    
    // password stuff
    Route::get('/forgot-password', [App\Http\Controllers\Auth\PasswordResetLinkController::class, 'create'])
        ->name('password.request');
    Route::post('/forgot-password', [App\Http\Controllers\Auth\PasswordResetLinkController::class, 'store'])
        ->name('password.email');
    Route::get('/reset-password/{token}', [App\Http\Controllers\Auth\NewPasswordController::class, 'create'])
        ->name('password.reset');
    Route::post('/reset-password', [App\Http\Controllers\Auth\NewPasswordController::class, 'store'])
        ->name('password.update');
});

// put routes that need user data here (p much anything that wasnt in the login and sign up page)
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
    
//     Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    
//     Route::get('/', function () {
//         return redirect()->route('dashboard');
//     })->name('home');

//     Route::get('/recipes', function () {
//         return view('recipes');
//     })->name('recipes');
// });

Route::middleware('auth')->group(function () {
    Route::get('/feed', function () {
        return view('feed'); 
    })->name('feed');
    
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    
    // testing for the layout stuff
    Route::get('/', function () {
        return view('feed'); 
    })->name('home');

    Route::get('/profile', function () {
        return view('profile'); 
    })->name('profile');
});

// this shit prob appears if something didn't get configged
Route::get('/welcome', function () {
    return view('welcome');
});


Route::post('/recipes', [RecipeController::class, 'store'])->middleware('auth:sanctum');
