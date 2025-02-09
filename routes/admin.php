<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CmsPageController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->name('login');

    Route::middleware('admin')->as('admin.')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('logout');

        // Admin Password Management
        Route::get('/change-password', [AdminController::class, 'changePassword'])->name('changePassword');
        Route::post('/update-password', [AdminController::class, 'updatePassword'])->name('updatePassword');
        Route::post('/check-current-password', [AdminController::class, 'checkCurrentPassword'])->name('checkCurrentPassword');
        Route::match(['get', 'post'], '/update-details', [AdminController::class, 'updateDetails'])->name('updateDetails');

        // CMS Pages Management
        Route::prefix('cms-page')->as('cms-page.')->group(function () {
            Route::get('/', [CmsPageController::class, 'index'])->name('index');
            Route::get('/create', [CmsPageController::class, 'create'])->name('create');
            Route::post('/store', [CmsPageController::class, 'store'])->name('store');
        });


        // Lead Management
        Route::prefix('leads')->as('leads.')->group(function () {
            Route::get('/', [CmsPageController::class, 'index'])->name('index');
            Route::get('/create', [CmsPageController::class, 'create'])->name('create');
            Route::post('/store', [CmsPageController::class, 'store'])->name('store');
        });

        // CMS Page Status Update
        Route::post('/update-cms-pages-status', [CmsPageController::class, 'updateCmsPagesStatus'])->name('updateCmsPagesStatus');
    });
});



