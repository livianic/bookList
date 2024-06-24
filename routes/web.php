<?php

use App\Http\Controllers\BookCrontoller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', [BookCrontoller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('register-book', [BookCrontoller::class, 'create'])->middleware('auth');
Route::get('edit-book/{id}', [BookCrontoller::class, 'edit'])->middleware('auth');
Route::post('edit-book/{id}', [BookCrontoller::class, 'update'])->middleware('auth');
Route::delete('delete-book/{id}', [BookCrontoller::class, 'destroy'])->middleware('auth');

Route::post('dashboard', [BookCrontoller::class, 'store']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
