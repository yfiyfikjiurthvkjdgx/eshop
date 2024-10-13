<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
Route::get('/', [FrontendController::class, 'welcome']);
Route::get('/service', [FrontendController::class, 'service']);
Route::get('/show-product/{id}', [FrontendController::class, 'showProduct']);


Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    
    Route::get('/addproduct', [ProductController::class, 'addproduct']);
    Route::get('/allproduct', [ProductController::class, 'allproduct']);
    Route::post('storeproduct', [ProductController::class, 'storeproduct']);
    Route::get('editproduct/{id}', [ProductController::class, 'editproduct']);
    Route::put('updateproduct/{id}', [ProductController::class, 'updateproduct']);
    Route::delete('deleteproduct/{id}', [ProductController::class, 'deleteproduct']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
