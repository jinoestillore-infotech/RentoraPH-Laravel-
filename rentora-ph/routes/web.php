<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OwnerRegistrationController;

// Rentora PH Landing Page Route
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Owner Registration Flow
Route::get('/register/owner', [OwnerRegistrationController::class, 'showForm'])->name('register.owner');
Route::post('/register/owner', [OwnerRegistrationController::class, 'register'])->name('register.owner.submit');