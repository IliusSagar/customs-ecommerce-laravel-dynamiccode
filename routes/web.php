<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\BrandController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('admin.index');
});

// Catgory
Route::get('admin/categories/list', [CategoryController::class, 'index'])->name('categories.list');
Route::get('admin/categories/add', [CategoryController::class, 'add'])->name('categories.add');
Route::post('admin/categories/store', [CategoryController::class, 'store'])->name('categories.store');
Route::get('admin/categories/delete/{id}', [CategoryController::class, 'delete'])->name('categories.delete');
Route::get('admin/categories/edit/{id}', [CategoryController::class, 'edit'])->name('categories.edit');
Route::post('admin/categories/update/{id}', [CategoryController::class, 'update'])->name('categories.update');

// Brand
Route::get('admin/brands/list', [BrandController::class, 'index'])->name('brands.list');
Route::get('admin/brands/add', [BrandController::class, 'add'])->name('brands.add');
Route::post('admin/brands/store', [BrandController::class, 'store'])->name('brands.store');
Route::get('admin/brands/store/{id}', [BrandController::class, 'delete'])->name('brands.delete');
Route::get('admin/brands/edit/{id}', [BrandController::class, 'edit'])->name('brands.edit');
Route::post('admin/brands/update/{id}', [BrandController::class, 'update'])->name('brands.update');
