<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('index');
Route::get('/category/{category}', [\App\Http\Controllers\ProductController::class, 'index'])->name('category.index');
Route::get('/product/{article}', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
});
Route::middleware(IsAdmin::class)->group(function () {
    Route::get('/basket/', [\App\Http\Controllers\BasketController::class, 'index'])->name('basket.index');
    Route::post('/basket/add', [\App\Http\Controllers\BasketController::class, 'upload'])->name('basket.upload');

    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/orders', [\App\Http\Controllers\OrderController::class, 'index'])->name('admin.orders');
    Route::post('/admin/product', [\App\Http\Controllers\ProductController::class, 'upload'])->name('product.upload');
    Route::delete('/admin/destroy', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
});

require __DIR__.'/auth.php';
