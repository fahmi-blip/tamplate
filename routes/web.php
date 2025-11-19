<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Dashboard
Route::get('/', [PageController::class, 'dashboard'])->name('dashboard');

// Blank Page
Route::get('/blank-page', [PageController::class, 'blankPage'])->name('blank.page');

