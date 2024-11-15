<?php

use App\Http\Controllers\pagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [pagesController::class, 'index'])->name('homePage');
Route::get('/users', [pagesController::class, 'users'])->name('usersPage');
Route::get('/courses', [pagesController::class, 'courses'])->name('courses');
Route::get('/enrollment', [pagesController::class, 'enrollment'])->name('enrollment');
Route::get('/priceHistory', [pagesController::class, 'priceHistory'])->name('priceHistory');
Route::get('/progressTracking', [pagesController::class, 'progressTracking'])->name('progressTracking');
