<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::prefix('products')->name('products.')->group(function () {
    Route::get('create', [ProductController::class, 'create'])->name('create');
    Route::post('/', [ProductController::class, 'store'])->name('store');
    Route::get('/', [ProductController::class, 'index'])->name('index'); 
    Route::get('{product}/edit', [ProductController::class, 'edit'])->name('edit');
    Route::put('{product}', [ProductController::class, 'update'])->name('update');
    Route::delete('{product}', [ProductController::class, 'destroy'])->name('destroy');
    Route::get('total-price', [ProductController::class, 'getTotalPrice'])->name('total-price');
});
