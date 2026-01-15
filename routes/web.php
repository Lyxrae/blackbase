<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SlideshowController;
use App\Http\Controllers\backend\ServiceController;
use App\Http\Controllers\Backend\MenuCategoryController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\OurFacilityController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\GalleryController;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/contact us', [FrontendController::class, 'contact'])->name('contact');
Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::post('/contact/send', [MessageController::class, 'store'])->name('contact.send');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {  
    Route::resource('slideshow', SlideshowController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('categories', MenuCategoryController::class);
    Route::resource('menus', MenuController::class);
    Route::resource('ourfacility', OurFacilityController::class);
    Route::resource('galleries', GalleryController::class);
    Route::resource('messages', MessageController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
