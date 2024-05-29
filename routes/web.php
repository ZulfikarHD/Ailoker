<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostLokerController;

Route::view('/', 'dashboard');
Route::view('/loker-terbaru', 'list-loker')->name('listLoker');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('admin/form/posting-loker', [PostLokerController::class, 'index'])
    // ->middleware(['auth'])
    ->name('admin.form.posting-loker');

Route::post('admin/form/posting-loker',[PostLokerController::class, 'store'])
    ->name('admin.posting-loker.store');

require __DIR__.'/auth.php';
