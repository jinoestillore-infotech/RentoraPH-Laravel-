<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\OwnerRegistrationController;
use App\Http\Controllers\TenantRegistrationController;

// Rentora PH Landing Page Route
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Owner Registration Flow
Route::get('/register/owner', [OwnerRegistrationController::class, 'showForm'])->name('register.owner');
Route::post('/register/owner', [OwnerRegistrationController::class, 'register'])->name('register.owner.submit');

// Tenant Registration Flow
Route::get('/register/tenant', [TenantRegistrationController::class, 'showForm'])->name('register.tenant');
Route::post('/register/tenant', [TenantRegistrationController::class, 'register'])->name('register.tenant.submit');