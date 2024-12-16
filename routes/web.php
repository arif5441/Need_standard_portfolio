<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//Routes for Client/ Frontend
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/about', action: [HomeController::class, 'about'])->name('about');
