<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

use App\Http\Controllers\CategoryController;
Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');
Route::get('/categories/{department}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
Route::delete('/categories/{department}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');
Route::get('/categories/index', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/{department}/show', [CategoryController::class, 'show'])->name('categories.show');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::put('/categories/{department}/update', [CategoryController::class, 'update'])->name('categories.update');

use App\Http\Controllers\SupplierController;
Route::get('/suppliers/create', [SupplierController::class, 'create'])->name('suppliers.create');
Route::get('/suppliers/{department}/edit', [SupplierController::class, 'edit'])->name('suppliers.edit');
Route::delete('/suppliers/{department}/destroy', [SupplierController::class, 'destroy'])->name('suppliers.destroy');
Route::get('/suppliers/index', [SupplierController::class, 'index'])->name('suppliers.index');
// Route::get('/suppliers/{department}/show', [SupplierController::class, 'show'])->name('suppliers.show');
Route::post('/suppliers/store', [SupplierController::class, 'store'])->name('suppliers.store');
Route::put('/suppliers/{department}/update', [SupplierController::class, 'update'])->name('suppliers.update');

use App\Http\Controllers\ProductController;
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::get('/products/{department}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::delete('/products/{department}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');
// Route::get('/products/{department}/show', [ProductController::class, 'show'])->name('products.show');
Route::post('/products/store', [ProductController::class, 'store'])->name('products.store');
Route::put('/products/{department}/update', [ProductController::class, 'update'])->name('products.update');

use App\Http\Controllers\PaymentMethodController;
Route::get('/paymentMethods/create', [PaymentMethodController::class, 'create'])->name('paymentMethods.create');
Route::get('/paymentMethods/{department}/edit', [PaymentMethodController::class, 'edit'])->name('paymentMethods.edit');
Route::delete('/paymentMethods/{department}/destroy', [PaymentMethodController::class, 'destroy'])->name('paymentMethods.destroy');
Route::get('/paymentMethods/index', [PaymentMethodController::class, 'index'])->name('paymentMethods.index');
// Route::get('/paymentMethods/{department}/show', [PaymentMethodController::class, 'show'])->name('paymentMethods.show');
Route::post('/paymentMethods/store', [PaymentMethodController::class, 'store'])->name('paymentMethods.store');
Route::put('/paymentMethods/{department}/update', [PaymentMethodController::class, 'update'])->name('paymentMethods.update');
