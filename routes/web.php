<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CmsPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function() {
    Route::match(['get', 'post'], 'login', [AdminController::class, 'login'])->name('login');
    Route::group(['middleware' => ['admin']], function() {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');

        Route::get('/change-password', [AdminController::class, 'changePassword'])->name('admin.changePassword');
        Route::post('/update-password', [AdminController::class, 'updatePassword'])->name('admin.updatePassword');
        Route::post('/check-current-pasword', [AdminController::class, 'checkCurrentPassword'])->name('admin.checkCurrentPassword');
        Route::match(['get', 'post'], '/update-details', [AdminController::class, 'updatedetails'])->name('admin.updatedetails');

        // Cms Pages
        Route::get('/cms-pages', [CmsPageController::class, 'index'])->name('admin.cmsPages');

        // CMS page update status
        Route::post('/update-cms-pages-status', [CmsPageController::class, 'updateCmsPagesStatus'])->name('admin.updateCmsPagesStatus');


    });
});


