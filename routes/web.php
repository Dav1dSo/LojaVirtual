<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DataTables\ManagementDatatable;
use App\Http\Controllers\Management\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Management
Route::get('/areaAdministrativa', [indexController::class, 'index'])->middleware(['auth', 'verified'])->name('management');

// ------------ -----  DataTables  -----  --------------

Route::get('/products/list', [ManagementDatatable::class, 'GetProducts'])->middleware(['auth', 'verified'])->name('products.list');




require __DIR__.'/auth.php';
