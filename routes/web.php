<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard');
Route::view('/loker-terbaru', 'list-loker')->name('listLoker');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
