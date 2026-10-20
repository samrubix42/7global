<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');

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
    Route::livewire('/faqs', 'admin::faq')->name('admin.faqs');
    Route::livewire('/testimonials', 'admin::testimonial')->name('admin.testimonials');
});
Route::livewire('/about', 'pages::about')->name('about');
Route::livewire('/contact', 'pages::contact')->name('contact');
Route::livewire('/equipment', 'pages::equipment')->name('equipment');
