<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TagController;
use App\Models\Product;

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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//TAG
Route::resource('/product', ProductsController::class);
Route::resource('/category', CategoriesController::class);
Route::resource('/tag', TagController::class);














/*
//PRODUTOS
Route::get('/product', [ProductsController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductsController::class, 'create'])->name('product.create');
Route::post('/product/store', [ProductsController::class, 'store'])->name('product.store');
Route::get('/product/edit/{product}', [ProductsController::class, 'edit'])->name('product.edit');
Route::post('/product/update/{product}', [ProductsController::class, 'update'])->name('product.update');
Route::get('/product/destroy/{product}', [ProductsController::class, 'destroy'])->name('product.destroy');
//CATEGORIAS 
Route::get('/category', [CategoriesController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoriesController::class, 'create'])->name('category.create');
Route::post('/category/store', [CategoriesController::class, 'store'])->name('category.store');
Route::get('/category/edit/{category}', [CategoriesController::class, 'edit'])->name('category.edit');
Route::post('/category/update/{category}', [CategoriesController::class, 'update'])->name('category.update');
Route::get('/category/destroy/{category}', [CategoriesController::class, 'destroy'])->name('category.destroy');
//TAG
Route::get('/tag', [TagsController::class, 'index'])->name('tag.index');
Route::get('/tag/create', [TagsController::class, 'create'])->name('tag.create');
Route::post('/tag/store', [TagsController::class, 'store'])->name('tag.store');
Route::get('/tag/edit/{tag}', [TagsController::class, 'edit'])->name('tag.edit');
Route::post('/tag/update/{tag}', [TagsController::class, 'update'])->name('tag.update');
Route::get('/tag/destroy/{tag}', [TagsController::class, 'destroy'])->name('tag.destroy');*/



