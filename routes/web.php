<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/about', [ProfileController::class, 'about'])->name('profile.about');
Route::get('/profile/portfolio', [ProfileController::class, 'portfolio'])->name('profile.portfolio');