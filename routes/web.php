<?php

use App\Http\Controllers\Site\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/service', [HomeController::class, 'service'])->name('service');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
Route::post('/lead-store', [HomeController::class, 'leadStore'])->name('lead-store');
Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thank-you');

Route::group([], function () {
    require_once(__DIR__ . '/admin.php');
});
