<?php

use App\Http\Controllers\Management\Products\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataTables\ManagementDatatable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Management
Route::get('/areaAdministrativa', [ProductsController::class, 'index'])->middleware(['auth', 'verified'])->name('management');
Route::get('/newProduct',[ProductsController::class, 'CreateProductForm'])->middleware(['auth', 'verified'])->name('new_product');
Route::post('/createProduct',[ProductsController::class, 'InsertProduct'])->middleware(['auth', 'verified'])->name('insert_product');

// ------------ -----  DataTables  -----  --------------

Route::get('/products/list', [ManagementDatatable::class, 'GetProducts'])->middleware(['auth', 'verified'])->name('products.list');

require __DIR__.'/auth.php';
