<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/login', [ProfileController::class, 'login'])->name('login');
Route::get('/register', [ProfileController::class, 'register'])->name('register');

Route::middleware('auth')->group(function () {

    Route::post('/user/save', [ProfileController::class, 'save'])->name('profile.save');

    Route::get('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    
    Route::get('/home', [DashboardController::class, 'dashboard'])->name('dashboard');
});

