<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customAutController;

Route::get('dashboard', [CustomAutController::class, 'dashboard']);
Route::get('login', [CustomAutController::class, 'index'])->name('login');
Route::get('custom-login', [CustomAutController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAutController::class, 'registration'])->name('register-user');
Route::get('custom-registration', [CustomAutController::class, 'customRegistration'])->name('register.custom');
Route::get('singnout', [CustomAutController::class, 'signOut'])->name('singnout');
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
