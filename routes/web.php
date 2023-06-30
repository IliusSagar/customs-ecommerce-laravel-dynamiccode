<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Category\CategoryController;
use App\Http\Controllers\Admin\Category\BrandController;
use App\Http\Controllers\Admin\Category\SubCategoryController;
use App\Http\Controllers\Admin\Category\CouponController;
use App\Http\Controllers\Admin\ProductController;

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
    return view('frontend.index');
});

Route::get('/admin', function () {
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

// Brand
Route::get('admin/subcategories/list', [SubCategoryController::class, 'index'])->name('subcategories.list');
Route::get('admin/subcategories/add', [SubCategoryController::class, 'add'])->name('subcategories.add');
Route::post('admin/subcategories/store', [SubCategoryController::class, 'store'])->name('subcategories.store');
Route::get('admin/subcategories/delete/{id}', [SubCategoryController::class, 'delete'])->name('subcategories.delete');
Route::get('admin/subcategories/edit/{id}', [SubCategoryController::class, 'edit'])->name('subcategories.edit');
Route::post('admin/subcategories/update/{id}', [SubCategoryController::class, 'update'])->name('subcategories.update');

// Coupons
Route::get('admin/coupons/list', [CouponController::class, 'index'])->name('coupons.list');
Route::get('admin/coupons/add', [CouponController::class, 'add'])->name('coupons.add');
Route::post('admin/coupons/store', [CouponController::class, 'store'])->name('coupons.store');
Route::get('admin/coupons/delete/{id}', [CouponController::class, 'delete'])->name('coupons.delete');
Route::get('admin/coupons/edit/{id}', [CouponController::class, 'edit'])->name('coupons.edit');
Route::post('admin/coupons/update/{id}', [CouponController::class, 'update'])->name('coupons.update');

// Products
Route::get('admin/products/list', [ProductController::class, 'index'])->name('products.list');
Route::get('admin/products/add', [ProductController::class, 'add'])->name('products.add');
Route::post('admin/products/store', [ProductController::class, 'store'])->name('products.store');

// Route::get('get/subcategory/{category_id}', [ProductController::class, 'GetSubcat']);
//  Route::get('get/subcategory/{category_id}', 'Admin\ProductController@GetSubcat');
