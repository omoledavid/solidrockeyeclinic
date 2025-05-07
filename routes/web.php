<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(SiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/blog', 'blog')->name('blog');
    Route::get('/blog/{slug}', 'viewPost')->name('blog.show');
    Route::get('/services', 'services')->name('services');
    Route::get('/services/{slug}', 'showService')->name('services.show');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/book-appointment', 'bookAppointment')->name('book-appointment');
    Route::post('/appointment', 'appointment')->name('appointment');
    Route::get('/technology', 'technology')->name('technology');
    Route::get('/offers', 'offers')->name('offers');
});
Route::get('sms', function () {
    return view('sms');
})->name('sms');

require __DIR__.'/auth.php';
