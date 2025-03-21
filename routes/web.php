<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\customerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\invoiceController;
use App\Http\Controllers\productController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\seleController;
use App\Http\Controllers\UserregistrationController;
use Illuminate\Support\Facades\Route;

// File Components Controller Route
Route::get('/', [homeController::class, 'homePage']);
Route::get('/dashboard', [DashboardController::class, 'dashboardPage'])->name('dashboardPage');
Route::get('/categoryPage', [categoryController::class, 'categoryPage'])->name('categoryPage');
Route::get('/customerPage', [customerController::class, 'customerPage'])->name('customerPage');
Route::get('/productPage', [productController::class, 'productPage'])->name('productPage');
Route::get('/invoicePage', [invoiceController::class, 'invoicePage'])->name('invoicePage');
Route::get('/reportPage', [reportController::class, 'reportPage'])->name('reportPage');
Route::get('/salePage', [seleController::class, 'selePage'])->name('salePage');

// profile Controller Route
Route::get('/userProfile', [profileController::class, 'userProfilePage']);

// User auth Login Controller Route
Route::get('/userLogin', [UserregistrationController::class, 'userLoginPage']);
Route::get('/userRegistration', [UserregistrationController::class, 'userRegistration']);
Route::get('/resetPassword', [UserregistrationController::class, 'resetPasswordPage']);
Route::get('/sendOtp', [UserregistrationController::class, 'sendOtpPage']);
Route::get('/verifyOtp', [UserregistrationController::class, 'verifyOtpPage']);
