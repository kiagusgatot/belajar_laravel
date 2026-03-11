<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/profile/about', [ProfileController::class, 'about'])->name('profile.about');
Route::get('/profile/portfolio', [ProfileController::class, 'portfolio'])->name('profile.portfolio');
Route::get('/students', [StudentController::class, 'index']);
Route::get('/students/{nama}', [StudentController::class, 'show']);