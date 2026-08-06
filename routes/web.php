<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

Route::prefix('owner')->middleware(['auth', 'verified'])->name('owner.')->group(function () {
    Route::livewire('create', 'pages::owner.create')->name('create');
});

require __DIR__.'/settings.php';
