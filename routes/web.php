<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NoteController;

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
Route::get('/home/{id?}', [DashboardController::class, 'dashboard'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/note/create/{edit?}', [NoteController::class, 'create'])->name('note.create');
    Route::post('/note/update', [NoteController::class, 'update'])->name('note.update');
    Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');
    Route::get('/note/delete/{id}', [NoteController::class, 'delete'])->name('note.delete');

});

