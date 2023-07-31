<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customAutController;
use App\http\controllers\CategoryController;
use App\http\controllers\ProductController;


Route::get('dashboard', [CustomAutController::class, 'dashboard']);
Route::get('login', [CustomAutController::class, 'index'])->name('login');
Route::get('custom-login', [CustomAutController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAutController::class, 'registration'])->name('register-user');
Route::get('custom-registration', [CustomAutController::class, 'customRegistration'])->name('register.custom');
Route::get('singnout', [CustomAutController::class, 'signOut'])->name('singnout');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');


Route::get('/categories/creates', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/categories/edit', [CategoryController::class, 'edit'])->name('categories.edit');


Route::get('/categories/update', [CategoryController::class, 'update'])->name('categories.update');

Route::get('/categories/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');

Route::get('/products/index', [ProductController::class, 'index'])->name('products.index');


Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::get('/products/store', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::get('/products/update', [ProductController::class, 'update'])->name('products.update');

Route::get('/products/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
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
