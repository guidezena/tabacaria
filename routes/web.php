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

Route::resource('/product', ProductsController::class);
Route::resource('/category', CategoriesController::class);
Route::resource('/tag', TagController::class);

//LIXEIRA

Route::get('/trash/product',[ProductsController::class, 'trash'])->name('product.trash');
Route::patch('product/restore/{id}', [ProductsController::class, 'restore'])->name('product.restore');

Route::get('/trash/tag',[TagController::class, 'trash'])->name('tag.trash');
Route::patch('tag/restore/{id}', [TagController::class, 'restore'])->name('tag.restore');

Route::get('/trash/category',[CategoriesController::class, 'trash'])->name('category.trash');
Route::patch('category/restore/{id}', [CategoriesController::class, 'restore'])->name('category.restore');



