<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('index');
});

Route::delete('/sauces/{id}', [App\Http\Controllers\SauceController::class, 'destroy'])->name('sauces.destroy');
Route::get('/sauces', [App\Http\Controllers\SauceController::class, 'index'])->name('sauces');
Route::get('/sauces/{id}', [App\Http\Controllers\SauceController::class, 'show'])->name('sauces.show');
Route::post('/sauces', [App\Http\Controllers\SauceController::class, 'store'])->name('sauces.store');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
