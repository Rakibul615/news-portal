<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperAdminController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','role:admin'])->group(function () {

    Route::get('/admin-home', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/Create-New-post', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/store-new-post', [AdminController::class, 'store'])->name('admin.store');
    Route::get('/edit-post/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::post('/update-post/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::get('/delete-post/{id}', [AdminController::class, 'delete'])->name('admin.delete');

});



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified','role:super-admin'])->group(function () {
    Route::get('/dashboard', [SuperAdminController::class, 'index'])->name('super-admin.index');
    Route::get('/review-post/{id}', [SuperAdminController::class, 'edit'])->name('super-admin.edit');
    Route::post('/update-post-status/{id}', [SuperAdminController::class, 'update'])->name('super-admin.update');

});

