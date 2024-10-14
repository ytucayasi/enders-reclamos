<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth'])->group(function () {
    Route::get('/reclamos/create', function () {
        return view('livewire.reclamos.create');
    })->name('reclamos.create');

    Route::get('/reclamos', function () {
        return view('livewire.reclamos.index');
    })->name('reclamos.index');
});

require __DIR__ . '/auth.php';
