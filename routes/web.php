<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BackendController\BrandController;
use App\Http\Controllers\BackendController\CategoryController;
use App\Http\Controllers\BackendController\ProductController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Brand route start here
Route::prefix('brand')->name('brand.')->group(function () {
    Route::get('/', [BrandController::class, 'BrandIndex'])->name('view');
    Route::post('add/', [BrandController::class, 'storeBrand'])->name('store');
    Route::get('/edit/{editedbrand:slug}',[BrandController::class, 'editBrand'])->name('edit');
    Route::put('/update/{brand:id}',[BrandController::class, 'updateBrand'])->name('update');
    Route::delete('/delete/{brand:slug}',[BrandController::class, 'deleteBrand'])->name('delete');
    Route::get('trash/',[BrandController::class, 'trashBrand'])->name('trash');
    Route::get('restore/{brand:id}',[BrandController::class, 'restoreBrand'])->name('restore');
    Route::delete('force-delete/{brand:id}',[BrandController::class, 'forceDeleteBrand'])->name('force.delete');
});
// Brand route end here
// =========================================
// Category and sub category start here
Route::prefix('category')->name('category.')->group(function(){
    Route::get('/',[CategoryController::class, 'index'])->name('view');
    Route::post('add/',[CategoryController::class, 'StoreCategory'])->name('store');
    route::post('sub-category/add/', [CategoryController::class, 'StoreSubCategory'])->name('sub.store');
    route::get('fetch/',[CategoryController::class, 'fetchCategory'])->name('fetch');
    route::get('fetch/sub-category/',[CategoryController::class, 'fetchSubCategory'])->name('sub.fetch');
});

// Category and sub category end here
// =========================================

// Product route start here
Route::prefix('product')->name('product.')->group(function(){
   route::get('/',[ProductController::class, 'index'])->name('view');
   route::post('add/',[ProductController::class, 'StoreProduct'])->name('store');
});

