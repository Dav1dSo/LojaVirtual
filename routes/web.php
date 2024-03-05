<?php

use App\Http\Controllers\Articles\GetArticles;
use App\Http\Controllers\Management\Products\ProductsController;
use App\Http\Controllers\BuyProduct\Payment;
use App\Http\Controllers\BuyProduct\CartShopping;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataTables\ManagementDatatable;
use App\Http\Controllers\Management\Articles\ArticlesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductsController::class, 'Home']);

// --------------- -----  Profile  -----  ----------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --------------- -----  Management  -----  ----------------

Route::get('/areaAdministrativa', [ProductsController::class, 'indexManagemente'])->middleware(['auth', 'verified'])->name('management');
Route::get('/newProduct',[ProductsController::class, 'CreateProductForm'])->middleware(['auth', 'verified'])->name('new_product');
Route::post('/createProduct',[ProductsController::class, 'InsertProduct'])->middleware(['auth', 'verified'])->name('insert_product');
Route::get('/editeProduct/{id}',[ProductsController::class, 'EditeProductForm'])->middleware(['auth', 'verified'])->name('edite_product');
Route::post('/product/edit/{id}', [ProductsController::class, 'EditeProduct'])->middleware(['auth', 'verified'])->name('edite_product');
Route::any('/product/filter/{categorie}', [ProductsController::class, 'FilterProductByCategorie'])->name('filter_product_by_categorie');
Route::any('/showProduct/{id}',[ProductsController::class, 'ShowProduct'])->name('delete_product');

Route::post('/avaliable/product/', [ProductsController::class, 'AvaliableProduct'])->middleware(['auth', 'verified']);

Route::post('/deleteProduct/{id}',[ProductsController::class, 'DeleteProduct'])->middleware(['auth', 'verified'])->name('delete_product');
Route::post('/newCategorie', [ProductsController::class, 'AddCategorie'])->middleware(['auth', 'verified'])->name('new_categorie');
Route::get('/galleyProducts/edit/{id}', [ProductsController::class, 'GalleryProducts'])->middleware(['auth', 'verified'])->name('edite_imagem');
Route::any('/galleyProducts/update/{id}', [ProductsController::class, 'GalleryProductsUpdate'])->middleware(['auth', 'verified'])->name('update_imagem');
Route::post('/galleyProducts/delete/{idImage}', [ProductsController::class, 'GalleryProductsDelete'])->middleware(['auth', 'verified'])->name('delete_imagem');

Route::get('/getArticles', [ArticlesController::class, 'GetArticles'])->middleware(['auth', 'verified'])->name('management_articles');
Route::get('/CreateArticles', [ArticlesController::class, 'CreateArticle'])->middleware(['auth', 'verified'])->name('management_add_article');
Route::post('/CreateArticles', [ArticlesController::class, 'SaveArticle'])->middleware(['auth', 'verified'])->name('management_create_article');

// --------------- -----  Buy Product  -----  ----------------

Route::post('/CartShopping', [CartShopping::class, 'CartShopping'])->middleware(['auth', 'verified'])->name('CartShopping');
Route::get('/Payment', [Payment::class, 'Payment'])->middleware(['auth', 'verified'])->name('payment');
Route::post('/CalTotal/{idCart}/{idUser}', [CartShopping::class, 'CalcTotal'])->middleware(['auth', 'verified'])->name('Total');
// --------------- -----  DataTables  -----  ----------------

Route::any('/products/list', [ManagementDatatable::class, 'GetProducts'])->middleware(['auth', 'verified'])->name('products.list');

require __DIR__.'/auth.php';
