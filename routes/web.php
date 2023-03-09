<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', [App\Http\Controllers\CategorieController::class, 'dash'])->name('dash');


Route::get('/categorie', [App\Http\Controllers\CategorieController::class, 'index'])->name('categorie.index');
Route::get('/categorie/create', [App\Http\Controllers\CategorieController::class, 'create'])->name('categorie.create');
Route::post('categorie/store', [App\Http\Controllers\CategorieController::class, 'store'])->name('categorie.store');
Route::get('/categorie/edit/{id}', [App\Http\Controllers\CategorieController::class, 'edit'])->name('categorie.edit');
Route::post('/categorie/update/{id}', [App\Http\Controllers\CategorieController::class, 'update'])->name('categorie.update');
Route::get('/categorie/delete/{id}', [App\Http\Controllers\CategorieController::class, 'delete'])->name('categorie.delete');


Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('user/store', [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/edit/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('/user/delete/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');



Route::get('/brand', [App\Http\Controllers\BrandController::class, 'index'])->name('brand.index');
Route::get('/brand/create', [App\Http\Controllers\BrandController::class, 'create'])->name('brand.create');
Route::post('/store', [App\Http\Controllers\BrandController::class, 'store'])->name('brand.store');
Route::get('/brand/store/{id}', [App\Http\Controllers\BrandController::class, 'edit'])->name('brand.edit');
Route::post('/brand/update/{id}', [App\Http\Controllers\BrandController::class, 'update'])->name('brand.update');
Route::get('/brand/delete/{id}', [App\Http\Controllers\BrandController::class, 'delete'])->name('brand.delete');



Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
Route::post('/product/store', [App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
Route::post('/update/{id}', [App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
Route::get('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('product.delete');