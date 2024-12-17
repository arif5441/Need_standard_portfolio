<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//Routes for Client/ Frontend
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', action: [HomeController::class, 'about'])->name('about');
Route::get(uri: '/services', action: [HomeController::class, 'services'])->name('services');
Route::get(uri: '/blog', action: [HomeController::class, 'blog'])->name('blog');
Route::get(uri: '/features', action: [HomeController::class, 'features'])->name('features');
Route::get('/needx', action: [HomeController::class, 'needx'])->name('needx');
Route::get('/shodai', action: [HomeController::class, 'shodai'])->name('shodai');
Route::get('/shohoz-soft', action: [HomeController::class, 'shohoz_soft'])->name('shohoz-soft');
Route::get('/trade', action: [HomeController::class, 'trade'])->name('trade');
Route::get('/farm', action: [HomeController::class, 'farm'])->name('farm');
Route::get('/team', action: [HomeController::class, 'team'])->name('team');
Route::get('/ecom-nsl', action: [HomeController::class, 'ecom_nsl'])->name('ecom-nsl');
Route::get('/faqs', action: [HomeController::class, 'faqs'])->name('faqs');
Route::get('/contact', action: [HomeController::class, 'contact'])->name('contact');
