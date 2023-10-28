<?php

use App\Http\Controllers\Management\Products\ProductsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataTables\ManagementDatatable;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// --------------- -----  Profile  -----  ----------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --------------- -----  Management  -----  ----------------

Route::get('/areaAdministrativa', [ProductsController::class, 'index'])->middleware(['auth', 'verified'])->name('management');
Route::get('/newProduct',[ProductsController::class, 'CreateProductForm'])->middleware(['auth', 'verified'])->name('new_product');
Route::post('/createProduct',[ProductsController::class, 'InsertProduct'])->middleware(['auth', 'verified'])->name('insert_product');

Route::post('/editeProduct/{id}',[ProductsController::class, 'EditeProduct'])->middleware(['auth', 'verified'])->name('edite_product');

Route::post('/deleteProduct/{id}',[ProductsController::class, 'DeleteProduct'])->middleware(['auth', 'verified'])->name('delete_product');
Route::get('/product/edit/{id}', [ProductsController::class, 'EditeProductForm'])->middleware(['auth', 'verified'])->name('edite_product');
Route::get('/galleyProducts/edit/{id}', [ProductsController::class, 'GalleryProducts'])->middleware(['auth', 'verified'])->name('edite_imagem');
Route::any('/galleyProducts/update/{id}', [ProductsController::class, 'GalleryProductsUpdate'])->middleware(['auth', 'verified'])->name('update_imagem');
Route::post('/galleyProducts/delete/{idImage}', [ProductsController::class, 'GalleryProductsDelete'])->middleware(['auth', 'verified'])->name('delete_imagem');

// --------------- -----  DataTables  -----  ----------------

Route::any('/products/list', [ManagementDatatable::class, 'GetProducts'])->middleware(['auth', 'verified'])->name('products.list');

require __DIR__.'/auth.php';
