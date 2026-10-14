<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/home2', 'pages::home2')->name('home2');

// Auth routes
Route::livewire('/login', 'auth::login')->name('login');
Route::match(['get', 'post'], '/logout', function () {
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect()->route('login');
})->name('logout');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::livewire('/', 'admin::dashboard')->name('admin.dashboard');
});
