<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
//use App\Http\Controllers\LoginController;
use App\Http\Controllers\MoneyInController;
use App\Http\Controllers\MoneyOutController;

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
    return view('home');
});

Route::resource('categories', CategoryController::class);
Route::resource('moneyins', MoneyInController::class);
Route::resource('moneyouts', MoneyOutController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
