<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AboutUSController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\OurMenuPricingController;
use App\Http\Controllers\RestaurantOpeningHoursController;


Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/Restaurant-Opening-Hours', [RestaurantOpeningHoursController::class, 'index'])->name('Restaurant.Opening.Hours');
Route::get('/About-us', [AboutUSController::class, 'index'])->name('about.us');
Route::get('/contact-us', [ContactUsController::class, 'index'])->name('contact.us');
Route::get('/Our-Menu-Pricing', [OurMenuPricingController::class, 'index'])->name('Our.Menu.Pricing');