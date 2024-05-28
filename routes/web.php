<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'dashboard');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::view('admin/form/posting-loker', 'admin.form.posting-loker')
    // ->middleware(['auth'])
    ->name('admin.form.posting-loker');

require __DIR__.'/auth.php';
