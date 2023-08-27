<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customAutController;
use App\http\controllers\CategoryController;
use App\http\controllers\ProductController;
use App\Http\Controllers\DepartamentoController;


Route::get('dashboard', [CustomAutController::class, 'dashboard']);
Route::get('login', [CustomAutController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAutController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAutController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAutController::class, 'customRegistration'])->name('register.custom');
Route::get('singnout', [CustomAutController::class, 'signOut'])->name('singnout');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::get('/categories/create', [CategoryController::class, 'create'])->name('categories.create');

Route::post('/categories/create', [CategoryController::class, 'store'])->name('categories.store');

Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('categories.edit');

Route::post('/categories/edit/{category}', [CategoryController::class, 'update'])->name('categories.update');

Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('categories.delete');




Route::get('/products', [ProductController::class, 'index'])->name('products.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('/products/create', [ProductController::class, 'store'])->name('products.store');

Route::get('/products/edit/{products}', [ProductController::class, 'edit'])->name('products.edit');

Route::post('/products/edit/{products}', [ProductController::class, 'update'])->name('products.update');

Route::post('/products/delete/{products}', [ProductController::class, 'destroy'])->name('products.delete');



Route::get('/departamento', [DepartamentoController::class, 'index'])->name('departamento.index');

Route::get('/departamento/create', [DepartamentoController::class, 'create'])->name('departamento.create');

Route::post('/departamento/create', [DepartamentoController::class, 'store'])->name('departamento.store');

Route::get('/departamento/edit/{department}', [DepartamentoController::class, 'edit'])->name('departamento.edit');

Route::post('/departamento/update/{department}', [DepartamentoController::class, 'update'])->name('departamento.update');

Route::post('/departamento/delete/{department}', [DepartamentoController::class, 'destroy'])->name('departamento.delete');



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
